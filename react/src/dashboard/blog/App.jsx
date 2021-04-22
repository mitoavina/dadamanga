const SERVER_URL = 'https://dadamanga.mg';

const App = () => {
    const [page, setPage] = React.useState('ArticleList');

    const renderCurrentPage = () => {
        switch (page) {
            case 'ArticleList':
                return <ArticleList setPage={setPage} />
            case 'AddArticle':
                return <AddArticle setPage={setPage} />
            default:
                return;
        }
    };

    return (<div>
        {renderCurrentPage()}
    </div>);
}