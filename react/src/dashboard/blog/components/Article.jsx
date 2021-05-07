const Article = (props) => {
    const { article } = props;

    return (
        <div className="Article">
            <div className="image-container">
                {article.presentation_image !== '' ? <img className="image" src={`${SERVER_URL}/uploads/images/articles/${article.id}/${article.presentation_image}`} alt={article.title} /> : <div className="no-image">No Image</div>}
            </div>
            <div className="text-container">
                <div className="last-update">LATEST UPDATE: {moment(new Date(article.update_date)).format("MMMM Do, YYYY h:mm a")}</div>
                <h2 className="title">{article.title}</h2>
                <div className="chapo">{article.chapo}</div>
                <div className="btn-container">
                    <button onClick={() => {
                        props.setChoosenArticle(article);
                    }}>Modify</button>
                    <button onClick={() => {
                        props.removeArticle(article.id)
                    }}>Remove</button>
                </div>
            </div>
        </div>
    )
}