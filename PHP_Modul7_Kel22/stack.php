<h2>PHP Stack</h2>
<form action="" method="POST">
    ==========[ PUSH ]==========<br><br>
    <label for="data">Data 1: </label>
    <input type="text" name="data1" /><br>
    <label for="data">Data 2: </label>
    <input type="text" name="data2" /><br>
    <label for="data">Data 3:</label>
    <input type="text" name="data3" />
    <br><br>
    ===========[ POP ]==========<br><br>
    <label for="data">Amount: </label>
    <input type="number" name="jmlpop" />
    <br><br>
    <input name="submit" type="submit" value="SUBMIT" />
    <br><br>
    ===========================
</form>

<?php
// start a session
$stack = new SplQueue();
$stack->push(2);
$stack->push(4);
$stack->push(8);
$stack->push(16);
$stack->push(32);
$stack->push(64);
$stack->push(128);
$stack->push(256);

print("Data lama[" . sizeof($stack) . "]: ");
for ($i = 0; $i < sizeof($stack); $i++) {
    print($stack[$i] . " ");
}

if (isset($_POST['submit'])) {

    /////// PUSH ///////
    if ($_POST['data1'] != NULL || $_POST['data2'] != NULL || $_POST['data3'] != NULL) {
        $data[0] = $_POST['data1'];
        $data[1] = $_POST['data2'];
        $data[2] = $_POST['data3'];
        for ($i = 0; $i < 3; $i++) {
            if ($data[$i] != null) {
                $stack->push($data[$i]);
            }
        }

        print("<br><br>==========[ PUSH ]==========<br><br>");

        print("Data baru[" . sizeof($stack) . "]: ");
        for ($i = 0; $i < sizeof($stack); $i++) {
            print($stack[$i] . " ");
        }
    }

    /////// POP ///////
    if ($_POST['jmlpop'] != NULL) {
        print("<br><br>===========[ POP ]==========<br><br>");
        $jmlpop = $_POST['jmlpop'];
        for ($i = 0; $i < $jmlpop; $i++) {
            $stack->pop();
        }
        print("Data baru[" . sizeof($stack) . "]: ");
        for ($i = 0; $i < sizeof($stack); $i++) {
            print($stack[$i] . " ");
        }
    }
    /////// RESULT ///////
    print("<br><br>===========================<br><br>");
    print("Data teratas: " . $stack->top());
}