const apiRequest = url => fetch(url).then(response => response.json());
const convertTravefyForApi = (travefy) => {
    return {
        tripId: travefy.travefy_trip_id,
        tripPrice: Number.parseInt(travefy.dm_trip_price),
        languageId: Number.parseInt(travefy.dm_language_id)
    }
}

const App = () => {
    const [state, setState] = React.useState({
        travefyIds: [],
        newTravefyTripId: "",
        languages: []
    })

    const { travefyIds, newTravefyTripId, languages } = state;

    const updateAsyncImgAndTitleTravefy = (index, trip) => {
        fetch(`https://frozen-falls-91201.herokuapp.com/https://trips.dadamanga.mg/itinerary-rest-api/itineraryPages/${trip.travefy_trip_id}`).then(response => {
            if (response.ok) {
                return response.json();
            } else {
                throw new Error("This trip doesn't exist");
            }
        }).then(results => {
            setState(prevState => {
                return {
                    ...prevState,
                    travefyIds: [...prevState.travefyIds.slice(0, index), { ...prevState.travefyIds[index], img: results.itineraryPage.trip.mediaImages[0].url, title: results.itineraryPage.trip.name }, ...prevState.travefyIds.slice(index + 1),]
                }
            })
        }).catch(err => {
            setState(prevState => {
                return {
                    ...prevState,
                    travefyIds: [...prevState.travefyIds.slice(0, index), { ...prevState.travefyIds[index], img: null, title: null }, ...prevState.travefyIds.slice(index + 1),]
                }
            })
        });
    }

    const toggleTravefy = (trip, index) => {
        if (trip.dm_trip_price === null) {
            trip.dm_trip_price = 0;
        } else {
            trip.dm_trip_price = null;
        }

        setState({
            ...state,
            travefyIds: [...travefyIds.slice(0, index), trip, ...travefyIds.slice(index + 1)]
        });
    }

    const getAllTravefyTrip = () => {
        return fetch(`${SERVER_URL}/WebServices/getAllTravefyTrip`, {
            method: 'GET',
        }).then(res => {
            if (!res.ok) {
                res.text().then(text => { throw Error(text) });
            }
            return res.json();
        }).then(json => {
        }).catch(err => {
            console.log('caught it!', err);
        });
    }

    const apiRequestAllLanguages = () => {
        return apiRequest(`${SERVER_URL}/WebServices/getAllLanguages`).then(results => {
            return results.data.map(language => {
                return {
                    id: language.id,
                    language: language.dm_language
                };
            });
        });
    }

    const apiRequestAllTravefyTrip = () => {
        return apiRequest(`${SERVER_URL}/WebServices/getAllTravefyTrip`).then(results => {
            return results.data.map(trip => {
                return trip
            });
        });
    }

    React.useEffect(() => {
        Promise.all([
            apiRequestAllLanguages(),
            apiRequestAllTravefyTrip()
        ]).then(values => {
            setState({
                ...state,
                languages: values[0],
                travefyIds: values[1]
            })
            for (let index = 0; index < values[1].length; index++) {
                updateAsyncImgAndTitleTravefy(index, values[1][index]);
            }
        }).catch(err => {
            console.log("Oops, smth went wrong", err);
        })
    }, [])


    const patchTravefyTrip = (id, travefyId, index) => {
        console.log("travefyId", travefyId, convertTravefyForApi(travefyId));
        fetch(`${SERVER_URL}/WebServices/updateTravefyTripId/${id}`, {
            method: 'PATCH',
            body: JSON.stringify(convertTravefyForApi(travefyId))
        }).then(res => {
            if (!res.ok) {
                res.text().then(text => { throw Error(text) });
            } else {
                alert('Update succeeded!');
                updateAsyncImgAndTitleTravefy(index, travefyId);
            }
        }).catch(err => {
            console.log('caught it!', err);
        });
    }

    const removeTravefyId = (id) => {
        fetch(`${SERVER_URL}/WebServices/removeTravefyTripId/${id}`, {
            method: 'DELETE',
        }).then(res => {
            if (!res.ok) {
                res.text().then(text => { throw Error(text) });
            } else {
                alert('trips removed!');
                getAllTravefyTrip();
            }
        }).catch(err => {
            console.log('caught it!', err);
        });
    }

    const addTravefyId = (travefyTripId) => {
        let fd = new FormData();
        fd.append("tripId", travefyTripId);

        fetch(`${SERVER_URL}/WebServices/insertTravefyTrip`, {
            method: 'POST',
            body: fd
        }).then(res => {
            if (!res.ok) {
                console.log("status:", res.status);
                switch (res.status) {
                    case 400:
                        alert('duplicate entry');
                        break;
                    default:
                        alert('unexpected error from the server. Please contact the developers.')
                        break;
                }
                res.text().then(text => { throw Error(text) });
            } else {
                alert('New Trip added');
                getAllTravefyTrip();
            }
        }).catch(err => {
            console.log('caught it!', err);
        });
    }

    console.log("state", state);

    const renderImgAndTitle = (travefyId) => {
        if (travefyId.title === undefined) {
            return "Loading...";
        } else {
            if (travefyId.title !== null) {
                return (<div className="card">
                    <img src={travefyId.img} alt="Loading" />
                    {travefyId.title}
                </div>)
            } else {
                return ("Trip  doesn't exist in your travefy account");
            }
        }

    }

    return (
        <div>
            <input value={newTravefyTripId} onChange={(e) => {
                setState({
                    ...state,
                    newTravefyTripId: e.currentTarget.value
                })
            }} placeholder='Add new Travefy ID' /><button onClick={() => {
                addTravefyId(newTravefyTripId);
            }}>Add</button>
            <table id="dash-travefy-table">
                <thead>
                    <tr>
                        <th>Travefy Id</th>
                        <th>Price</th>
                        <th>Language</th>
                        <th>Info</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {travefyIds.map((travefyId, index) => {
                        return (
                            <tr key={index}>
                                <td><input className="travefy-id" onChange={(e) => {
                                    setState({
                                        ...state,
                                        travefyIds: [...travefyIds.slice(0, index), { ...travefyId, travefy_trip_id: e.currentTarget.value }, ...travefyIds.slice(index + 1)]
                                    })
                                }} value={travefyId.travefy_trip_id} /></td>
                                <td>
                                    <div><input type="checkbox" onChange={() => { toggleTravefy(travefyId, index) }} checked={travefyId.dm_trip_price === null ? true : false} value="Manual" />From Travefy</div>
                                    <div><input type="number" value={travefyId.dm_trip_price ? travefyId.dm_trip_price : ''} disabled={travefyId.dm_trip_price === null ? true : false} onChange={(e) => {
                                        setState({
                                            ...state,
                                            travefyIds: [...travefyIds.slice(0, index), { ...travefyId, dm_trip_price: e.currentTarget.value }, ...travefyIds.slice(index + 1)]
                                        })
                                    }} /></div>
                                </td>
                                <td>
                                    <select value={travefyId.dm_language_id} onChange={(e) => {
                                        setState({
                                            ...state,
                                            travefyIds: [...travefyIds.slice(0, index), { ...travefyId, dm_language_id: e.currentTarget.value }, ...travefyIds.slice(index + 1)]
                                        })
                                    }}>
                                        {languages.map(language => {
                                            return (<option key={language.id} value={language.id} >{language.language}</option>)
                                        })}
                                    </select>
                                </td>
                                <td>
                                    {renderImgAndTitle(travefyId)}
                                </td>
                                <td><button onClick={() => {
                                    patchTravefyTrip(travefyId.id, travefyId, index);
                                }}>Update</button></td>
                                <td><button onClick={() => {
                                    removeTravefyId(travefyId.id);
                                }}>Remove</button></td>
                            </tr>
                        );
                    })}
                </tbody>
            </table>
        </div>
    );
}