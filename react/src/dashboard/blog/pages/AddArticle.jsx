const PARAGRAPH_TYPE = '1';
const IMAGE_TYPE = '2';

const AddArticle = (props) => {
    const [state, setState] = React.useState({
        title: '',
        chapo: '',
        presentationImg: {
            src: '',
            file: null
        },
        fields: [
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

    const confirmChanges = () => {
        let fd = new FormData();

        let json = JSON.stringify(state);
        fd.append('json', json);
        if (presentationImg.file !== null) {
            fd.append('files[]', presentationImg.file, presentationImg.src);
        }
        for (let i = 0; i < fields.length; i++) {
            console.log("field", fields[i]);
            console.log("typeof field.type", typeof fields[i].type);
            console.log("typeof IMAGE_TYPE", typeof IMAGE_TYPE);
            if (fields[i].type === IMAGE_TYPE && fields[i].image.file !== null) {
                console.log("makato am" + fields[i].image.filename);
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


    console.log(state);

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
                <img src={presentationImg.file !== null ? URL.createObjectURL(presentationImg.file) : null} alt="Some image" />
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
                            <ArticleField updateField={updateField} index={index} type={field.type} paragraph={field.paragraph} image={field.image} />
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
            <div><button onClick={() => { props.setPage('ArticleList') }}>Retour</button><button onClick={confirmChanges}>Confirmer changements</button></div>
        </div>
    )
}