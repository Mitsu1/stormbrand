imagessearch();
function imagessearch(){
    let perPage = 5;
    let query = encodeURIComponent('nature'); // Codifica el parámetro de consulta si es necesario
    let apiUrl = 'https://api.pexels.com/v1/search?query=' + query + '&per_page=' + perPage;
    const apiKey = 'pS5mChkG66DZPN1UCerdFxK0FYJaI3yQjRj2V4Nzns8ckDUWTXSRj6lg';

    let xhr = new XMLHttpRequest();
    xhr.setRequestHeader('Authorization', 'Bearer ' + apiKey);
    xhr.open('GET', apiUrl, true);

    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 300) {
            // La solicitud fue exitosa
            let responseData = JSON.parse(xhr.responseText);
            //aquí puedes manejar los datos de respuesta como desees
            console.log(responseData);
        } else {
            // La solicitud no fue exitosa; manejar el error
            console.error('Error en la solicitud:', xhr.statusText);
        }
    };

    xhr.onerror = function() {
    // Manejar errores de red
        console.error('Error de red al realizar la solicitud.');
    };

    xhr.send();

}