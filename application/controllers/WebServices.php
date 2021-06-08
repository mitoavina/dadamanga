<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WebServices extends CI_Controller
{

    function index()
    {
        echo 'Rien à voir ici.';
    }

    function getAllLanguages()
    {
        $this->db->from('dm_language');
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(array(
                'status' => '200',
                'type' => 'success',
                'data' => $this->db->get()->result()
            )));
    }

    function removeTravefyTripId($id)
    {
        if ($this->input->method() != "delete")
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(400)
                ->set_output(json_encode(array(
                    'status' => '400',
                    'type' => 'error',
                    'error' => 'Seul méthode DELETE autorisée'
                )));


        $this->db->where('id', $id);
        $this->db->delete('dm_travefy_trip');

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(array(
                'status' => '200',
                'type' => 'success'
            )));
    }

    function updateTravefyTripId($id)
    {
        if ($this->input->method() != "patch")
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(400)
                ->set_output(json_encode(array(
                    'status' => '400',
                    'type' => 'error',
                    'error' => 'Seul méthode PATCH autorisée'
                )));

        $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $request = json_decode($stream_clean);


        $tripId = $request->tripId;
        $tripPrice = $request->tripPrice;
        $languagueId = $request->languageId;

        $data = array(
            'travefy_trip_id' => $tripId,
            'dm_trip_price' => $tripPrice,
            'dm_language_id' => $languagueId
        );

        $this->db->where('id', $id);
        $this->db->update('dm_travefy_trip', $data);

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(array(
                'status' => '200',
                'type' => 'success',
                'id' => $id,
                'message' => $request
            )));
    }

    function getAllTravefyTrip()
    {
        $this->db->from('dm_travefy_trip_complete');
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(array(
                'status' => '200',
                'type' => 'success',
                'data' => $this->db->get()->result()
            )));
    }

    function insertTravefyTrip()
    {
        $tripId = $this->input->post("tripId");

        $data = array(
            'travefy_trip_id' => $tripId
        );

        if ($this->db->insert('dm_travefy_trip', $data)) {
            $lastInsertId = $this->db->insert_id();
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode(array(
                    'status' => '200',
                    'type' => 'success',
                    'insertedId' => $lastInsertId
                )));
        } else {
            $error = $this->db->error();
            if ($error['code'] == 1062) {
                return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(400)
                    ->set_output(json_encode(array(
                        'status' => '400',
                        'type' => 'duplicate entry'
                    )));
            } else {
                return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(400)
                    ->set_output(json_encode(array(
                        'status' => '500',
                        'type' => 'error from the server'
                    )));
            }
        }
    }

    function getAllArticle()
    {
        $this->db->from('dm_article');
        $this->db->order_by("update_date", "desc");
        $this->db->limit(3, 0);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(array(
                'status' => '200',
                'type' => 'success',
                'data' => $this->db->get()->result()
            )));
    }

    function removeArticle($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('dm_article');

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(array(
                'status' => '200',
                'type' => 'success'
            )));
    }

    function updateArticle()
    {
        try {
            $json = $this->input->post("json");
            $decodedJson = json_decode($json);
            $id = $decodedJson->{'id'};
            $title = $decodedJson->{'title'};
            $chapo = $decodedJson->{'chapo'};
            $presentationImg = $decodedJson->{'presentationImg'}->{'src'};
            $fields = json_encode($decodedJson->{'fields'});

            $data = array(
                'title' => $title,
                'chapo' => $chapo,
                'fields' => $fields,
                'presentation_image' => $presentationImg
            );


            $this->db->trans_start();

            $this->db->where('id', $id);
            $this->db->update('dm_article', $data);

            $uploadPath = 'uploads/images/articles/' . $id;

            $isError = FALSE;
            if (isset($_FILES['files'])) {
                $nbFiles = count($_FILES['files']['name']);

                $config['upload_path']   = $uploadPath;
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = '5000';
                $config['overwrite'] = TRUE;

                $this->load->library('upload', $config);


                for ($i = 0; $i < $nbFiles; $i++) {

                    if (!empty($_FILES['files']['name'][$i])) {

                        $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                        $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                        $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                        $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                        $_FILES['file']['size'] = $_FILES['files']['size'][$i];


                        $config['file_name'] = $_FILES['files']['name'][$i];

                        $this->upload->initialize($config);


                        if ($this->upload->do_upload('file')) {
                            $_FILES['file'] = array();
                            // $uploadData = $this->upload->data();
                            // $filename = $uploadData['file_name'];

                            // $data['totalFiles'][] = $filename;
                        } else {
                            $isError = TRUE;
                            $status_msg = 'The image upload has failed!<br/>' . $this->upload->display_errors('', '') . ' uploadPathwas: ' . $uploadPath;
                            $this->db->trans_rollback();
                            break;
                        }
                    }
                }
            }

            $this->db->trans_complete();

            if ($isError) {
                return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(400)
                    ->set_output(json_encode(array(
                        'status' => '400',
                        'type' => 'error',
                        'error' => $status_msg
                    )));
            }

            if (isset($_FILES['files'])) {
                return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(200)
                    ->set_output(json_encode(array(
                        'status' => '200',
                        'type' => 'success',
                        'filesName' => json_encode($_FILES['files']['name']),
                        'tempName' => json_encode($_FILES['files']['tmp_name'])
                    )));
            }

            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode(array(
                    'status' => '200',
                    'type' => 'warning',
                    'message' => 'files non trouvé mais update effectué'
                )));
        } catch (Exception $e) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(500)
                ->set_output(json_encode(array(
                    'status' => '500',
                    'type' => 'warning',
                    'message' => $e->getMessage()
                )));
        }
    }

    function insertArticle()
    {
        $json = $this->input->post("json");
        $decodedJson = json_decode($json);
        $title = $decodedJson->{'title'};
        $chapo = $decodedJson->{'chapo'};
        $presentationImg = $decodedJson->{'presentationImg'}->{'src'};
        $fields = json_encode($decodedJson->{'fields'});

        $data = array(
            'title' => $title,
            'chapo' => $chapo,
            'fields' => $fields,
            'presentation_image' => $presentationImg
        );

        $this->db->trans_start();
        $this->db->insert('dm_article', $data);
        $lastInsertId = $this->db->insert_id();

        $uploadPath = 'uploads/images/articles/' . $lastInsertId;

        mkdir('./' . $uploadPath, 0777, true);

        $isError = FALSE;
        if (isset($_FILES['files'])) {
            $nbFiles = count($_FILES['files']['name']);

            $config['upload_path']   = $uploadPath;
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000';
            // $config['overwrite'] = TRUE;

            $this->load->library('upload', $config);


            for ($i = 0; $i < $nbFiles; $i++) {

                if (!empty($_FILES['files']['name'][$i])) {

                    $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                    $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                    $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                    $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                    $_FILES['file']['size'] = $_FILES['files']['size'][$i];


                    $config['file_name'] = $_FILES['files']['name'][$i];

                    $this->upload->initialize($config);


                    if ($this->upload->do_upload('file')) {
                        $_FILES['file'] = array();
                        // $uploadData = $this->upload->data();
                        // $filename = $uploadData['file_name'];

                        // $data['totalFiles'][] = $filename;
                    } else {
                        $isError = TRUE;
                        $status_msg = 'The image upload has failed!<br/>' . $this->upload->display_errors('', '') . ' uploadPathwas: ' . $uploadPath;
                        rmdir('./' . $uploadPath);
                        $this->db->trans_rollback();
                        break;
                    }
                }
            }
        }

        $this->db->trans_complete();

        if ($isError) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(400)
                ->set_output(json_encode(array(
                    'status' => '400',
                    'type' => 'error',
                    'error' => $status_msg
                )));
        }

        if (isset($_FILES['files'])) {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode(array(
                    'status' => '200',
                    'type' => 'success'
                )));
        }

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode(array(
                'status' => '200',
                'type' => 'warning',
                'message' => 'files non trouvé'
            )));
    }
}
