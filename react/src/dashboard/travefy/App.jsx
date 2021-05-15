const App = () => {
    const [state, setState] = React.useState({
        travefyIds: [],
        newTravefyTripId: ""
    })

    const { travefyIds, newTravefyTripId } = state;

    const getAllTravefyTrip = () => {
        fetch(`${SERVER_URL}/WebServices/getAllTravefyTrip`, {
            method: 'GET',
        }).then(res => {
            if (!res.ok) {
                res.text().then(text => { throw Error(text) });
            }
            return res.json();
        }).then(json => {
            console.log(json);
            setState({ ...state, travefyIds: json.data });
        }).catch(err => {
            console.log('caught it!', err);
        });
    }

    React.useEffect(() => {
        getAllTravefyTrip();
    }, [])


    const patchTravefyTrip = (id, newTravefyTripId) => {
        fetch(`${SERVER_URL}/WebServices/updateTravefyTripId/${id}`, {
            method: 'PATCH',
            body: JSON.stringify({ tripId: newTravefyTripId })
        }).then(res => {
            if (!res.ok) {
                res.text().then(text => { throw Error(text) });
            } else {
                alert('Update succeeded!');
                getAllTravefyTrip();
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
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {travefyIds.map((travefyId, index) => {
                        return (
                            <tr key={index}>
                                <td><input onChange={(e) => {
                                    setState({
                                        ...state,
                                        travefyIds: [...travefyIds.slice(0, index), { ...travefyId, travefy_trip_id: e.currentTarget.value }, ...travefyIds.slice(index + 1)]
                                    })
                                }} value={travefyId.travefy_trip_id} /></td>
                                <td><button onClick={() => {
                                    patchTravefyTrip(travefyId.id, travefyId.travefy_trip_id);
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