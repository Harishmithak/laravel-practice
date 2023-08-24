
<?php
$name = "Harishmitha";
echo "Hello, " . $name;
echo '<br>'
?>
Hello, {{ $name }}
<hr>

<!-- if else  statement -->
<?php
$age = 28;
if ($age >= 18) {
    echo "Eligible to vote.";
} else {
    echo "Not eligible to vote";
}
echo '<br>';
?>

@if($age <= 18)
Eligible to vote
@elseif($age>=25) 
working person
white collor job
@else
Not eligible to vote
@endif

<hr>
<!-- foreach -->
<?php
$colors = ["red", "green", "blue"];
foreach ($colors as $color) {
    echo $color . " ";

}
echo '<br>';
?>

@foreach($colors as $color)
    {{ $color }} 
@endforeach
<hr>

<!-- for loop -->
<?php
for ($i = 1; $i <= 5; $i++) {
    echo " $i";
}
echo '<br>';
?>
@for($i = 1; $i <= 5; $i++)
    {{ $i }}
@endfor
<hr>

<!-- while loop -->
<?php
$count = 0;
while ($count < 3) {
    echo "Count: $count<br>";
    $count++;
}
echo '<br>';
?>
@php
    $count = 0;
@endphp
@while($count < 3)
    Count: {{ $count }}<br>
    @php
        $count++;
    @endphp
@endwhile
<hr>

<!-- switch  -->
<?php
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Start of the week";
        break;
    case "Friday":
        echo "End of the week";
        break;
    default:
        echo "Midweek";
}
echo '<br>';
?>
@php
    $day = "wednesday";
@endphp
@switch($day)
    @case("Monday")
        Start of the week
        @break
    @case("Friday")
        End of the week
        @break
    @default
        Midweek
@endswitch

<hr>

<?php
$name = null;

if (isset($name)) {
    echo "Name is set: $name";
} else {
    echo "Name is not set";
}
echo '<br>';
?>
@php
    $name = "Harishmitha";
@endphp

@isset($name)
    Name is set: {{ $name }}
@else
    Name is not set
@endisset
<hr>

<?php
$name = "";

if (empty($name)) {
    echo "Name is empty";
} else {
    echo "Name is not empty";
}
echo '<br>';
?>
@php
    $name = "";
@endphp

@empty($name)
    Name is empty
@else
    Name is not empty
@endempty
<hr>
 
<?php
$isAdmin = true;
if ($isAdmin) {
    echo "<p>You are admin.</p>";
}
?>
@php
    $isAdmin = false;
@endphp

@unless($isAdmin) 
    <p>You are not an admin.</p>
@endunless

<hr>
<!-- $loop variable will be available inside of your loop. 
 This variable provideswhether this is the first or last iteration through the loop-->
@foreach ($colors as $color)
<p>The iterations remaining in the loop.: {{ $loop->remaining }}</p>

    @if ($loop->first)
        This is the first iteration.
    @endif
 
    @if ($loop->last)
        This is the last iteration.
        <p>The total number of items in the array being iterated: {{ $loop->count }}</p>
    @endif

    <p>This is colorr {{ $color }}</p>
 
@endforeach



<hr>
<?php
// Using break
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        break; // Exit the loop when i is 3
    }
    echo $i . " ";
}
echo "<br>";

// Using continue
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue; // Skip this iteration when i is 3
    }
    echo $i . " ";
}
echo "<br>";
?>


@for($i = 1; $i <= 5; $i++)
    @if($i == 3)
        @break {{-- Exit the loop when i is 3 --}}
    @endif
    {{ $i }} 
@endfor
<br>


@for($i = 1; $i <= 5; $i++)
    @if($i == 3)
        @continue {{-- Skip this iteration when i is 3 --}}
    @endif
    {{ $i }} 
@endfor
<hr>

@php
$users=[];
@endphp
@forelse($users as $user)
    {{ $user }}
@empty
    No items available.
@endforelse

<hr>
@forelse($colors as $color)
    {{ $color}}
@empty
    No items available.
@endforelse
<hr>







