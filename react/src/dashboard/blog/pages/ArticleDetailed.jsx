const PARAGRAPH_TYPE = '1';
const IMAGE_TYPE = '2';

const ArticleDetailed = (props) => {
    const [state, setState] = React.useState({
        id: props.article ? props.article.id : '',
        title: props.article ? props.article.title : '',
        chapo: props.article ? props.article.chapo : '',
        presentationImg: {
            src: props.article ? props.article.presentation_image : '',
            file: null
        },
        fields: props.article ? JSON.parse(props.article.fields) : [
            {
                type: PARAGRAPH_TYPE,
                paragraph: '',
                image: {
                    src: '',
                    file: null,
                    filename: ''
                }
            }
        ]
    });

    const { fields, title, chapo, presentationImg } = state;

    const updateField = (index, newField) => {
        setState({
            ...state,
            fields: [...fields.slice(0, index), newField, ...fields.slice(index + 1)]
        })
    };

    const removeField = (index, field) => {
        let newFields = [...fields.slice(0, index), ...fields.slice(index + 1)];
        setState({
            ...state,
            fields: newFields
        });
    }

    const confirmCreation = () => {
        let fd = new FormData();

        let json = JSON.stringify(state);
        fd.append('json', json);
        if (presentationImg.file !== null) {
            fd.append('files[]', presentationImg.file, presentationImg.src);
        }
        for (let i = 0; i < fields.length; i++) {
            if (fields[i].type === IMAGE_TYPE && fields[i].image.file !== null) {
                fd.append('files[]', fields[i].image.file, fields[i].image.filename);
            }
        }

        fetch(`${SERVER_URL}/WebServices/insertArticle`, {
            method: 'POST',
            body: fd
        }).then(res => {
            if (!res.ok) {
                res.text().then(text => { throw Error(text) });
            }
            return res.json();
        }).then(json => { console.log(json) }).catch(err => {
            console.log('caught it!', err);
        });
    }

    const confirmUpdates = () => {
        let fd = new FormData();

        let json = JSON.stringify(state);
        fd.append('json', json);
        if (presentationImg.file !== null) {
            fd.append('files[]', presentationImg.file, presentationImg.src);
        }
        for (let i = 0; i < fields.length; i++) {
            if (fields[i].type === IMAGE_TYPE && fields[i].image.file !== null && !isEmpty(fields[i].image.file)) {
                fd.append('files[]', fields[i].image.file, fields[i].image.filename);
            }
        }

        fetch(`${SERVER_URL}/WebServices/updateArticle`, {
            method: 'POST',
            body: fd
        }).then(res => {
            if (!res.ok) {
                res.text().then(text => { throw Error(text) });
            }
            console.log("resp", res);
            return res.json();
        }).then(json => { console.log(json) }).catch(err => {
            console.log('caught it!', err);
        });
    }


    console.log("ArticleDetailed state", state);
    return (
        <div>
            <div>Ajouter nouveau article</div>
            <div>Titre <input name="title" value={title} onChange={(e) => { setState({ ...state, title: e.currentTarget.value }) }} /></div>
            <div>
                <div>Chapo</div>
                <textarea name="chapo" value={chapo} onChange={(e) => { setState({ ...state, chapo: e.currentTarget.value }) }} rows="10" cols="150"></textarea>
            </div>
            <div>
                Image de présentation
                <input type="file" accept="image/*"
                    onChange={(event) => {
                        let file = event.target.files[0];
                        let src = `${new Date().getTime()}_${file.name}`;
                        setState({
                            ...state,
                            presentationImg: {
                                src,
                                file
                            }
                        })
                    }}

                />
                <img src={presentationImg.file !== null ? URL.createObjectURL(presentationImg.file) : props.article ? `${SERVER_URL}/uploads/images/articles/${props.article.id}/${presentationImg.src}` : ''} alt="Some image" />
            </div>
            <div>
                {fields.map((field, index) => {
                    return (
                        <React.Fragment key={index}>
                            <div><button onClick={() => {
                                setState({
                                    ...state,
                                    fields: [
                                        ...fields.slice(0, index),
                                        {
                                            type: PARAGRAPH_TYPE,
                                            paragraph: '',
                                            image: {
                                                src: '',
                                                file: null,
                                                filename: ''
                                            }
                                        },
                                        ...fields.slice(index)
                                    ]
                                })
                            }}>Ajouter avant</button>
                            </div>
                            <ArticleField articleId={props.article ? props.article.id : undefined} updateField={updateField} index={index} type={field.type} paragraph={field.paragraph} image={field.image} />
                            <div><button onClick={() => {
                                setState({
                                    ...state,
                                    fields: [
                                        ...fields.slice(0, index + 1),
                                        {
                                            type: PARAGRAPH_TYPE,
                                            paragraph: '',
                                            image: {
                                                src: '',
                                                file: null,
                                                filename: ''
                                            }
                                        },
                                        ...fields.slice(index + 1)
                                    ]
                                })
                            }}>Ajouter après</button>
                            </div>
                            {fields.length > 1 ? <button onClick={() => { removeField(index, field) }}>Supprimer</button> : null}
                        </React.Fragment>
                    )
                })}
            </div>
            <div>
                <button onClick={() => { props.setPage('ArticleList') }}>Retour</button>
                {props.article ? <button onClick={confirmUpdates}>Confirm updates</button> : <button onClick={confirmCreation}>Create Article</button>}
                {props.article ? <button onClick={() => { props.removeArticle(props.article.id) }}>Remove Article</button> : null}
            </div>
        </div>
    )
}