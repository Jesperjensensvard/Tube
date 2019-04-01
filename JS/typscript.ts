
function makeRequest(url, method, formdata, callback) {
    fetch(url, {
        method: method,
        body: formdata
    }).then((data) => {
        return data.json()
    }).then((result) => {
        callback(result)
    }).catch((err)=>{
        console.log(err)
    })
}



function loadsiteData() {
    var data  = new FormData();
    data.append("collectionType", "loadsite");

    makeRequest("DatabaseApi/", "POST", data, (response) => {console.log(response)});
}