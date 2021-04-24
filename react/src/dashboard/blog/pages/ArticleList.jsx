

const ArticleList = (props) => {
    const [state, setState] = React.useState({
        page: 1,
        articles: []
    });

    const { page, articles } = state;

    const removeArticle = (id) => {
        let fd = new FormData();

        fd.append('id', id);

        fetch(`${SERVER_URL}/WebServices/removeArticle`, {
            method: 'POST',
            body: fd
        }).then(res => {
            if (!res.ok) {
                res.text().then(text => { throw Error(text) });
            }
            return res.json();
        }).then(json => {
            fetch(`${SERVER_URL}/WebServices/getAllArticle`, {
                method: 'GET',
            }).then(res => {
                if (!res.ok) {
                    res.text().then(text => { throw Error(text) });
                }
                return res.json();
            }).then(json => {
                console.log(json);
                setState({ ...state, articles: json.data });
            }).catch(err => {
                console.log('caught it!', err);
            });
        }).catch(err => {
            console.log('caught it!', err);
        });
    }

    React.useEffect(() => {
        fetch(`${SERVER_URL}/WebServices/getAllArticle`, {
            method: 'GET',
        }).then(res => {
            if (!res.ok) {
                res.text().then(text => { throw Error(text) });
            }
            return res.json();
        }).then(json => {
            console.log(json);
            setState({ ...state, articles: json.data });
        }).catch(err => {
            console.log('caught it!', err);
        });
    }, [])


    return (
        <div>
            <div><button onClick={() => { props.setPage('AddArticle') }}>Nouveau Article</button></div>
            <div>Liste Article</div>
            <div>
                {articles.map((article, index) => {
                    return (
                        <Article removeArticle={removeArticle} setChoosenArticle={props.setChoosenArticle} setPage={props.setPage} article={article} key={index} />
                    )
                })}
            </div>
        </div>
    )
}