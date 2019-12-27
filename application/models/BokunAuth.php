<?php

class BokunAuth extends CI_Model {
	public $api_base_url = 'https://api.bokun.is';
	public $utc_datetime;
	public $bokun_access_key = 'bc75730befc744f693a4d5e5dcae0613';
	public $bokun_secret_key = 'd775b699c0104342aadf9caa050e18eb';
	public $bokun_curl_header_string;
	public $bokun_json_path;
	public $bokun_http_method = 'GET';
	public function __construct( $http_method = 'GET', $json_path = null ) {
		$this->bokun_json_path          = $json_path;
		$this->bokun_http_method        = $http_method;
		$this->utc_datetime             = $this->get_date_in_utc();
		$this->bokun_curl_header_string = $this->get_request_headers_string();
	}
	/**
	 * Get the actual json content from the api via curl
	 *
	 * Use this function to get bokun data into array
	 *
	 * @return array|mixed|object
	 */
	public function get_bokun_data() {
		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt( $ch, CURLOPT_HTTPGET, 1 );
		curl_setopt( $ch, CURLOPT_HEADER, true );
		$request_uri = $this->api_base_url . $this->bokun_json_path;
		curl_setopt( $ch, CURLOPT_URL, $request_uri );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $this->get_curl_headers() );
		/**
		 * Dont get the actual headers!!
		 */
		curl_setopt( $ch, CURLOPT_HEADER, 0 );
		$output = curl_exec( $ch );
		curl_close( $ch );
		return json_decode( $output );
	}
	/**
	 * Sets headers string for Bokun
	 * date in UTF . access key . http method . json path
	 *
	 * @return string
	 */
	private function get_request_headers_string() {
		return $this->utc_datetime . $this->bokun_access_key . $this->bokun_http_method . $this->bokun_json_path;
	}
	/**
	 * Get bokun signature
	 * - base64 encoded
	 * - use sha1 algorithm to set hash with secret key
	 *
	 * @return string
	 */
	private function get_bokun_signature() {
		$signature = hash_hmac( 'sha1', $this->bokun_curl_header_string, $this->bokun_secret_key, true );
		return base64_encode( $signature );
	}
	/**
	 * Get current timestamp in UTC
	 *
	 * @return false|string
	 */
	private function get_date_in_utc() {
		return gmdate( "Y-m-d H:i:s" );
	}
	/**
	 * Get curl http headers
	 *
	 * @return array
	 */
	private function get_curl_headers() {
		return [
			'Accept: application/json',
			'X-Bokun-AccessKey: ' . $this->bokun_access_key,
			'X-Bokun-Date: ' . $this->utc_datetime,
			'X-Bokun-Signature: ' . $this->get_bokun_signature(),
		];
	}
}