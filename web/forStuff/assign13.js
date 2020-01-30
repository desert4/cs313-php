function setPage() {
    console.log('loading data.txt');
    document.getElementById('music_form').addEventListener('submit', setData);
}

function validateName(element) {
    var name = element.value;
    if (name != '') {
        element.style.border = 'none';
    }
    else {
        element.style.border = 'red';
        return false;
    }
    return true;
}

function validateId(element) {
    var ID = element.value;
    if (ID != '') {
        element.style.border = 'none';
    }
    else {
        element.style.border = 'red';
        return false;
    }
}

function validateRoom(element) {
    var room = element.value
    if (room != '') {
        element.style.border = 'none';
    }
    else {
        element.style.border = 'red';
        return false;
    }
    return true;
}

function secondStudent(element) {
    concertType = element.value;
    if (concertType == 'Duet') {
        document.getElementById('student2').style.display = 'block';
    } else {
        document.getElementById('student2').style.display = 'none';
    }
}

function setData(event) {
    event.preventDefault();
    console.log('Calling setData()');

    // validation goes here
    if (validateName(document.getElementById('fname1')) == false) {
        event.returnValue = false;
    }
    
    if (validateName(document.getElementById('lname1')) == false) {
        event.returnValue = false;
    }
    if (validateId(document.getElementById('studentid1')) == false) {
        event.returnValue = false;
    }

    // AJAX request
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = this.responseText;
            console.log(response);
            response = JSON.parse(response);
            displayResults(response);
        }
    }

    var form = document.getElementById('music_form');
    var data = new FormData(form);

    xhr.open('POST', 'assign13.php', true);
    xhr.send(data);
}

function displayResults(response) {
    var output = '';
    if (response == 'no data') {
        output = '';
    }
    else {
        for (person of response) {
            output += "Name: " + person.firstname + " " + person.lastname + "<br>" +
                "ID: " + person.studentid + "<br>" +
                "Concert Type: " + person.type + "<br>" +
                "Skill: " + person.skill + "<br>" +
                "Instrument: " + person.instrument + "<br>" +
                "Building: " + person.location + "<br>" +
                "Room: " + person.room + "<br>" +
                "Time: " + person.time + "<br>" +
                "<hr>";
        }
    }
    document.getElementById('registrants').innerHTML = output;
}