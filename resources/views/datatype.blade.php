

Both bigIncrements and increments data types are often used for defining primary keys when creating tables.
They provide a simple and effective way to ensure each record in the table has a unique identifier.
{{-- bigIncrements: Auto-incrementing primary key using a "BIGINT" data type. --}}
{{-- table to contain a very large number of records --}}
$table->bigIncrements('id'); 

{{-- increments: Auto-incrementing primary key using an "INT" data type. --}}
{{-- table to contain moderate number of records --}}
$table->increments('id');

{{-- string: Variable length string column. --}}
$table->string('name');

{{-- text: Text column for larger pieces of text. --}}
$table->text('description');

{{-- integer: Integer column. --}}
$table->integer('age');

{{-- bigInteger: "BIGINT" integer column. --}}
{{-- when you need to store larger integer values --}}
$table->bigInteger('views');

{{-- boolean: Boolean column. --}}
$table->boolean('is_active');

{{-- decimal: Decimal column with precision and scale. --}}
$table->decimal('price', 8, 2);


{{-- float: Floating-point number column. --}}
$table->float('rating', 3, 1);

{{-- date: Date column. --}}
$table->date('birth_date');

{{-- dateTime: Date and time column. '2023-08-25 14:30:00' --}}
$table->dateTime('created_at');

{{-- time: Time column.'08:00:00' --}}
$table->time('start_time');

{{-- Columns that store quantities, amounts,
or other numeric values that should always be positive can use unsignedBigInteger or unsignedInteger. --}}

{{-- unsignedBigInteger: Unsigned "BIGINT" integer column. --}}
$table->unsignedBigInteger('amount');

{{-- unsignedInteger: Unsigned "INT" integer column. --}}
$table->unsignedInteger('quantity');





