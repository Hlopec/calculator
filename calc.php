<?php
include __DIR__ . "/header.php";
?>

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

    <button type="button" name="clear">C</button>
    <button type="button" name="clearLast"><-</button>

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

    const actionButtons = document.getElementsByName('actions');
    const arrValues = Array.from(actionButtons).map(button => button.value);

    document.querySelectorAll('button').forEach( button => {
        button.addEventListener('click', function() {
            let currentInputValue = document.getElementById("view").value;
            let buttonValue = this.value;
            let calcInput = document.getElementById("view");
            let lastSymbolInInput = currentInputValue.slice(-1)

            if( button.name === "number" ){
                calcInput.setAttribute('value', currentInputValue + buttonValue);
            }else if( button.name === "actions" ){
                if( currentInputValue.length !== 0 ){
                    if ( !arrValues.some(val => val === lastSymbolInInput) ) {
                        calcInput.setAttribute( 'value', currentInputValue + buttonValue );
                    }
                }
            }
            if(button.name === "clear"){
                calcInput.setAttribute('value', '');
            }
            if(button.name === "clearLast"){
                calcInput.setAttribute( 'value', currentInputValue.slice(0, -1) );
            }


            //
            // let currentInputValue = document.getElementById("view").value;
            // let buttonValue = this.value;
            // let calcInput = document.getElementById("view");
            // console.log(buttonValue);
            // calcInput.setAttribute('value', currentInputValue + buttonValue);
        });
    });

    //
    // document.querySelectorAll('button[name="number"]').forEach(button => {
    //     button.addEventListener('click', function() {
    //         let currentInputValue = document.getElementById("view").value;
    //         let buttonValue = this.value;
    //         let calcInput = document.getElementById("view");
    //         console.log(buttonValue);
    //         calcInput.setAttribute('value', currentInputValue + buttonValue);
    //     });
    // });
    //
    // const actionButtons = document.getElementsByName('actions');
    // const arrValues = Array.from(actionButtons).map(button => button.value);
    //
    //
    // document.querySelectorAll('button[name="actions"]').forEach(button => {
    //     button.addEventListener('click', function() {
    //         let currentInputValue = document.getElementById("view").value;
    //         let buttonValue = this.value;
    //         let calcInput = document.getElementById("view");
    //         let lastSymbolInInput = currentInputValue.slice(-1)
    //
    //         if( currentInputValue.length !== 0 ){
    //             if ( !arrValues.some(val => val === lastSymbolInInput) ) {
    //                 calcInput.setAttribute( 'value', currentInputValue + buttonValue );
    //             }
    //         }
    //     });
    // });
</script>

<?php
include __DIR__ . "/footer.php";
?>