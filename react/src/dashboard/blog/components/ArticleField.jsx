const ArticleField = (props) => {
    const [state, setState] = React.useState({
        index: props.index,
        type: props.type,
        paragraph: props.paragraph,
        image: props.image
    });

    React.useEffect(() => {
        setState({
            ...state,
            type: props.type,
            paragraph: props.paragraph,
            image: props.image
        })
    }, [props.paragraph, props.image, props.type])


    const { type, paragraph, image, index } = state;

    const onTypeChange = (e) => {
        props.updateField(index, { ...state, type: e.currentTarget.value });
    }

    const renderParagraphOrImage = () => {
        switch (type) {
            case PARAGRAPH_TYPE:
                return (<textarea onChange={(e) => {
                    setState({ ...state, paragraph: e.currentTarget.value });
                    props.updateField(index, { ...state, paragraph: e.currentTarget.value });
                }} rows="10" cols="150" value={paragraph}></textarea>);

            case IMAGE_TYPE:
                return (
                    <div>
                        <input type="file" accept="image/*"
                            onChange={(event) => {
                                let file = event.target.files[0];
                                let filename = `${new Date().getTime()}_${file.name}`;
                                setState({
                                    ...state,
                                    image: {
                                        src: image.src,
                                        file,
                                        filename
                                    }
                                })

                                props.updateField(index, {
                                    ...state, image: {
                                        src: image.src,
                                        file,
                                        filename
                                    }
                                })
                            }}

                        />
                        <img src={(image.file !== null && !isEmpty(image.file)) ? URL.createObjectURL(image.file) : props.articleId ? `${SERVER_URL}/uploads/images/articles/${props.articleId}/${image.filename}` : ''} alt="Some image" />
                    </div>
                )

            default:
                return null;
        }
    }

    return (
        <div>
            <div>
                <input type="radio" value={PARAGRAPH_TYPE} id={`paragraph${props.index}`} name={`paragraph${props.index}`} onChange={onTypeChange} checked={type === PARAGRAPH_TYPE} /><label htmlFor={`paragraph${props.index}`}>Paragraphe</label>
                <input type="radio" value={IMAGE_TYPE} id={`image${props.index}`} name={`image${props.index}`} onChange={onTypeChange} checked={type === IMAGE_TYPE} /><label htmlFor={`image${props.index}`}>Image</label>
            </div>
            <div>
                {renderParagraphOrImage()}
            </div>
        </div>
    )
}