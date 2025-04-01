<style>
    h1{
        text-align: center;
    }
    form{
        width: 320px;
        margin: 0 auto;
    }
    button{
        width: 30%;
        margin: 1%;
    }
    input{
        width: 97%;
        margin: 5px 1%;
    }
</style>

<h1><?php echo "My Calculator"; ?></h1>
<?php
$numbers = [
    'zero' => 0,
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 4,
    'five' => 5,
    'six' => 6,
    'seven' => 7,
    'eight' => 8,
    'nine' => 9
];

$mathActions = [
    '+' => '+',
    '-' => '-',
    '/' => '/',
    '*' => '*',
]

?>
<form method="post">
    <input type="text" name="view" id="view" value="">
    <?php
        foreach ( $numbers as $number ) { ?>
    <button type="button" value="<?= $number ?>" name="number"><?= $number ?></button>
    <?php } ?>

    <?php
        foreach ( $mathActions as $action ) { ?>
    <button type="button" value="<?= $action ?>" name="actions"><?= $action ?></button>
    <?php } ?>
    <button type="submit" name="calculate">=</button>
</form>


<script>
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
    console.log(buttonValues); // Output: ["1", "2", "3"]

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
</script>

<?php

?>