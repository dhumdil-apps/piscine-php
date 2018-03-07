# PHP Piscine - Day 01


## Exercise 00 : HW

#### Turn-in directory : ex00/
#### Files to turn in : hw.php
#### Allowed functions : The whole standard PHP library
#### Notes : n/a

Reminder: PHP is really easy. It’s like C, except that we do not declare the variables. You just place a dollar sign in front of them, they are not typed, and there in no main. The rest, is -almost- a detail.

### Today, we will stay on PHP in command line. Start by creating a small program, quite simple, called hw.php. This program must greet the world with its famous message.
`
$> ./hw.php
Hello World
$>
`

Note: MMORPG Day (Massive Moulinette Online Rules PHP Geniuses)


## Exercise 01 : mlX

#### Turn-in directory : ex01/
#### Files to turn in : mlx.php
#### Allowed functions : The whole standard PHP library
#### Notes : n/a

Since you are all super comfortable with minilibX, I am sorry to inform you that there are no PHP binding that you can use here. This exercise has nothing to do with graphics nor with maths. Nope, what you need to create, is a program that can display 1000 times the letter X, a newline, and with the constraint that it cannot go over 100 chars.

`
$> ls -la mlx.php
-rwxr-xr-x 1 boulon users 92 Mar 12 11:54 mlx.php
$> ./mlx.php
XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
`
[TL;DP]
`
XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
$>
`


## Exercise 02 : to the Divine

#### Turn-in directory : ex02/
#### Files to turn in : oddeven.php
#### Allowed functions : The whole standard PHP library
#### Notes : n/a

As the Wise Old Man used to say, it’s thanks to Olympia, the detergent of the Gods that the laundry is so soft and smells so good. But if you think about it, there was only 1 chance out of 2 to wash the right pile of laundry with it. It depended on whether it had an even or an odd number. Create a program in php that will kindly ask of you a pile number, and that will inform you if it’s even (therefore washed with Olympia) or if it’s odd.

`
$> ./oddeven.php
Enter a number: 42
The number 42 is even
Enter a number: 0
The number 0 is even
Enter a number:
'' is not a number
Enter a number: toto
'toto' is not a number
Enter a number: 21
The number 21 is odd
Enter a number: 99cosmos
'99cosmos' is not a number
Enter a number: ^D
$>
`

Pay attention to the example, in particular spaces, the uppercases and the exact
messages. At the end, it a ’CTRL-D’ to exit. And the readline library is not a part of
the standard PHP library.


## Exercise 03 : ft_split

#### Turn-in directory : ex03/
#### Files to turn in : ft_split.php
#### Allowed functions : The whole standard PHP library
#### Notes : n/a

Create the ft_split function. It will take a string as argument, and will return a sorted array with the different words, initially separated by one or more spaces from the original string. Your ft_split.php submited will be included in a php test file.

`
<?PHP
include("ft_split.php");
print_r(ft_split("Hello World AAA"));
?>
`

`
$> ./main.php
Array
(
	[0] => AAA
	[1] => Hello
	[2] => World
)
$>
`
