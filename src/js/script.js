document.querySelectorAll('button[name="number"]').forEach(button => {
    button.addEventListener('click', function() {
        let currentInputValue = document.getElementById("view").value;
        let buttonValue = this.value;
        let calcInput = document.getElementById("view");
        console.log(buttonValue);
        calcInput.setAttribute('value', currentInputValue + buttonValue);
    });
});
// Select all buttons
const buttons = document.querySelectorAll('button[name="actions"]');

// Initialize an empty array
const buttonValues = [];

// Iterate over the buttons and push their values to the array
buttons.forEach(button => {
    buttonValues.push(button.value);
});

// Log the array to the console
console.log(buttonValues);

document.querySelectorAll('button[name="actions"]').forEach(button => {
    button.addEventListener('click', function() {
        let currentInputValue = document.getElementById("view").value;
        let buttonValue = this.value;
        let calcInput = document.getElementById("view");
        console.log(buttonValue);
        if (currentInputValue.slice(-1) !== buttonValue) {
            calcInput.setAttribute('value', currentInputValue + buttonValue);
        }
        // if(currentInputValue.slice(-1) !== ) {
        //     calcInput.setAttribute('value', currentInputValue + buttonValue);
        // }
    });
});