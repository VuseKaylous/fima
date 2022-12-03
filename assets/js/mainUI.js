const workplace = document.querySelector('#workplace');

const MAIN = () => {
    while (workplace.hasChildNodes()) {
        workplace.removeChild(workplace.firstChild);
    }
    let canvas = document.createElement('canvas');
    new Chart(canvas, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
        }
    });
    workplace.appendChild(canvas);
}


const REPORT = () => {

}

const SETTING = () => {

}

const SIGNOUT = () => {

}

workplace.onload = function() {
    currentState = 'Home'
    console.log("fuck");
    MAIN();
}

document.querySelector('#home-btn').onclick = function() {
    currentState = 'Home';
    MAIN();
}
document.querySelector('#result-btn').onclick = function() {
    currentState = 'Results';
    RESULT();
}
document.querySelector('#report-btn').onclick = function() {
    currentState = 'Report';
    REPORT();
}
document.querySelector('#setting-btn').onclick = function() {
    currentState = 'Setting';
    SETTING();
}
document.querySelector('#signout-btn').onclick = function() {
    currentState = 'Sign out';
    SIGNOUT();
}

document.querySelector('#add-button').onclick = function() {
    const createExamForm = document.createElement('form');
    createExamForm.setAttribute('action', '');
    const part1 = document.createElement('div');

    const testNameLabel = document.createElement('label');
    testNameLabel.setAttribute('class', 'form-label');
    testNameLabel.innerText = 'Test name (ex: Demo Test)';
    
    const testNameInput = document.createElement('input');
    testNameInput.setAttribute('type', 'text');
    testNameInput.required = true;
    testNameInput.setAttribute('id', 'test-name');
    testNameInput.setAttribute('class', 'form-control');

    part1.appendChild(testNameLabel);
    part1.appendChild(testNameInput);

    createExamForm.appendChild(part1);
    
    
    const part2 = document.createElement('div');
    const passwordLabel = document.createElement('label');
    passwordLabel.innerText = 'Choose a date';
    passwordLabel.setAttribute('class', 'form-label');
    
    const passwordInput = document.createElement('input');
    passwordInput.setAttribute('type', 'date');
    passwordInput.required = true;
    passwordInput.setAttribute('id', 'test-date');
    passwordInput.setAttribute('class', 'form-control');
    part2.appendChild(passwordLabel);
    part2.appendChild(passwordInput);

    createExamForm.appendChild(part2);

    // const part3 = document.createElement('div');
    // const confirmPasswordLabel = document.createElement('label');
    // confirmPasswordLabel.innerText = 'Retype your password';
    // confirmPasswordLabel.setAttribute('class', 'form-label');

    // const confirmPasswordInput = document.createElement('input');
    // confirmPasswordInput.setAttribute('type', 'password');
    // confirmPasswordInput.required = true;
    // confirmPasswordInput.setAttribute('id', 'confirm-test-password');
    // confirmPasswordInput.setAttribute('class', 'form-control');
    // part3.appendChild(confirmPasswordLabel);
    // part3.appendChild(confirmPasswordInput);

    // createExamForm.appendChild(part3);

    const submitButton = document.createElement('button');
    submitButton.setAttribute('type', 'submit');
    submitButton.setAttribute('onClick', 'closeAddExam()');
    submitButton.innerText = 'Create Test';
   
    submitButton.setAttribute('style', 'margin-top: 2%');

    createExamForm.appendChild(submitButton);

    document.getElementById('addExamForm').appendChild(createExamForm);
    createExamForm.setAttribute('z-index', '1000000000');
    createExamForm.setAttribute('style', `
    background: #25408f;
    color: #F7F7F7; 
    border-radius: 6px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 1% 1% 1%;
    text-align: center`);
} 

function closeAddExam() {
    document.getElementById("addExamForm").innerHTML = "";
    window.location.href = 'addExam.php';
}