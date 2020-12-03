window.addEventListener('load', () => {

    // Via Query parameters - GET
    /* const params = (new URL(document.location)).searchParams;
    const name = params.get('name');
    const surname = params.get('surname'); */

    // Via local Storage
    /* const name = localStorage.getItem('NAME');
    const surname = localStorage.getItem('SURNAME'); */
    
    const hallname = sessionStorage.getItem('HallNAME');
    const date = sessionStorage.getItem('DATE');
    const eventname= sessionStorage.getItem('EVENTNAME');
    
    document.getElementById('exampleFormControlInput1').innerHTML = hallname;
    document.getElementById('exampleFormControlInput2').innerHTML = date;
    document.getElementById('exampleFormControlInput3').innerHTML = eventname;

})
