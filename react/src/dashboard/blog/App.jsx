const SERVER_URL = 'https://dadamanga.mg';

const isEmpty = (obj) => { // check if object is equal to "{}"
    return obj && Object.keys(obj).length === 0 && obj.constructor === Object;
}

const App = () => {
    const [state, setState] = React.useState({
        page: 'ArticleList',
        choosenArticle: null
    });

    const { page, choosenArticle } = state;

    const setPage = (newPage) => {
        setState({
            ...state,
            page: newPage
        });
    };

    const setChoosenArticle = (article) => {
        console.log("setChose", article);
        setState({
            ...state,
            page: 'ArticleDetailed',
            choosenArticle: article
        })
    }

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
            setState({
                ...state,
                page: 'ArticleList',
                choosenArticle: null
            })
        }).catch(err => {
            console.log('caught it!', err);
        });
    }

    const renderCurrentPage = () => {
        switch (page) {
            case 'ArticleList':
                return <ArticleList setChoosenArticle={setChoosenArticle} setPage={setPage} />
            case 'AddArticle':
                return <ArticleDetailed setPage={setPage} />
            case 'ArticleDetailed':
                return <ArticleDetailed removeArticle={removeArticle} article={choosenArticle} setPage={setPage} />
            default:
                return null;
        }
    };

    return (
        <div>
            {renderCurrentPage()}
        </div>
    );
}