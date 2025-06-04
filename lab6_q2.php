<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q2</title>
</head>
<body>
    <?php
    $students = [
        [
            'name' => 'Alice',
            'program' => 'BIP',
            'age' => 21,
        ],
        [ 
            'name' => 'Bob',
            'program' => 'BIS',
            'age' => 20,
        ],
        [
            'name' => 'Raju',
            'program' => 'BIT',
            'age' => 22,
        ],
    ];
    ?>
    
    <h2>Students List</h2>
    <table border="1">
        <tr>
            <th><strong>Name</strong></th>
            <th><strong>Program</strong></th>
            <th><strong>Age</strong></th>
        </tr>
        <?php foreach($students as $student): ?>
        <tr>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['program']; ?></td>
            <td><?php echo $student['age']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>