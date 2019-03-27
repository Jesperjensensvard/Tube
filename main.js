
/* function makeRequest(url, method, formdata, callback) {
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

function getCategory() {
    var requestDataToPhp = new FormData()
    requestDataToPhp.append("collectionType", "g")

    makeRequest("/DatabaseApi/reguest.php", "POST", requestDataToPhp, (response) => {showCategory(response)})
}


function showCategory(response) {
    console.log(response)
} */


/* getCategory(); */