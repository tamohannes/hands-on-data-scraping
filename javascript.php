<?php include "menu.php" ?>

    <div class="container">
        <div class="section">
            <div class="title">JavaScript</div>
            <div class="txt">
                Now when you are familiar with HTML and CSS which give the structure and the design of a webpage it’s
                time to get into the scripting language called JavaScript by which we will add logic to our webpage and
                give dynamics to it. JavaScript (from now on JS) is the programming language of HTML and the Web. You
                can write it down in one of the code editors mentioned earlier and connect it to your HTML “code” by the
                following ways.
            </div>
            <div class="note">
                <span class="note-keyword">Note</span>: Please remember that JavaScript and Java are not the same, the
                first one is a scripting
                language
                which is executed in browser, the second one is a lower level programming language which is designed
                for
                running on multiple types of devices.
            </div>
            <div class="txt">
                To write your first JS script open and close a “script” tag in your HTML file and put your code
                between
                those tags, like this:
            </div>

            <div class="code">
                <p class="c11"><span class="c3">&lt;</span><span class="c27">script</span><span
                        class="c3 c18">&gt;</span>
                </p>
                <p class="c11"><span class="c3 c18">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//
                        something goes
                        here</span>
                </p>
                <p class="c11"><span class="c3">&lt;/</span><span class="c27">script</span><span class="c3">&gt;</span>
                </p>
            </div>

            <div class="txt">
                Or you can add src attribute to the “script” tag by mentioning your file path and it will
                link to that file, just like this (for a file called “myscript.js” which is in the same
                directory as your html file is) :
            </div>


            <div class="code">
                <p class="c11"><span class="c3">&lt;</span><span class="c27">script</span><span
                        class="c7">&nbsp;</span><span class="c8">src</span><span class="c7">=</span><span
                        class="c16">&quot;myscripts.js&quot;</span><span class="c3">&gt;&lt;/</span><span
                        class="c27">script</span><span class="c3 c18">&gt;</span>
                </p>
            </div>

            <div class="txt">
                Now when we know where to write your script, let's write it.
                As in math, in programming also there are variables, constants, functions and so on.
                A variable is a “box” in which we can store, int(number), str(text), array(list of elements) and many
                more. You can define a variable by using “var” or “let” keyword, let’s say we want to store the number 5
                in a variable called “x” and number 10 in a variable called “y”, we need to do the following:
            </div>

            <div class="code">
                <p class="c11"><span class="c27">var</span><span class="c7">&nbsp;</span><span class="c8">x</span><span
                        class="c7">&nbsp;= </span><span class="c43">5</span><span class="c7 c18">;</span></p>
                <p class="c11"><span class="c27">var</span><span class="c7">&nbsp;</span><span class="c8">y</span><span
                        class="c7">&nbsp;= </span><span class="c43">10</span><span class="c7 c18">;</span></p>
            </div>


            <div class="txt">
                By typing this we tell the computer that we are defining a variable called “x” and it’s value should be
                5 and a variable called y with value of 10. The same can be done by using “let”.
                At the end of every line we need to put a semicolon sign “;” to let the computer know that you have
                finished a line.
            </div>
            <div class="txt">
                Now, where to run or execute our script and see some results? For that we can use the console of a
                browser. Let’s use Google Chrome or any browser, you can do a right click on your html file page and go
                down in the menu till you see “Inspect” (in case of Google Chrome) or you can use the shortcut by
                pressing on your keyboard “ctr+shirt+I”. It will open a page where you will see the HTML of your
                webpage. On the top you will see some sections and you will notice that the “Elements” section is active
                (where your HTML and CSS can be seen) on the right of that tab you will see the “Console” tab, click it.
            </div>
            <div class="txt">
                It will open a page where a blinking cursor will appear.
            </div>
            <div class="txt">
                This is the console, where you can execute JS code, try to copy and paste those lines in that console
                and press enter:
            </div>

            <div class="code">
                <p class="c11"><span class="c27">var</span><span class="c7">&nbsp;</span><span class="c8">x</span><span
                        class="c7">&nbsp;= </span><span class="c43">5</span><span class="c7 c18">;</span></p>
                <p class="c11"><span class="c57">console</span><span class="c7">.</span><span
                        class="c52">log</span><span class="c7">(</span><span class="c8">x</span><span
                        class="c7">);</span></p>
            </div>

            <div class="txt">
                What do you see, 5 ? Good job.
            </div>
            <div class="txt">
                What we did here. The first line is the line with which you are already familiar. The second line is
                used for printing things in the console. So we say that we need to log something in the console, and
                whatever goes between the brackets will be printed.
                Try this one:
            </div>


            <div class="code">
                <p class="c11"><span class="c27">var</span><span class="c7">&nbsp;</span><span class="c8">y</span><span
                        class="c7">&nbsp;= </span><span class="c43">2</span><span class="c7 c18">;</span></p>
                <p class="c11"><span class="c57">console</span><span class="c7">.</span><span
                        class="c52">log</span><span class="c7">(</span><span class="c16">&quot;Hello world, this is the
                        &quot;</span><span class="c7">&nbsp;+
                    </span><span class="c8">y</span><span class="c7">&nbsp;+ </span><span class="c16">&quot;nd time I am
                        using
                        console&quot;</span><span class="c7 c18">);</span></p>
            </div>

            <div class="txt">
                To use string or text we need to put it between the double or single quotes
            </div>

            <div class="note">
                <span class="note-keyword">Note</span>: Make sure you use either double or single quotes for a
                particular text, in other words close it
                with the type of quote that you opened.
            </div>

            <div class="txt">
                The plus “+” sign here concatenates the 3 parts.
            </div>

            <div class="txt">
                Now when you are familiar with the basics of console you can write your code in your file and then print
                it in the console. Try putting this exact script in your JS file and then open the console of the
                webpage, and see what you get
            </div>


            <div class="sub-title">Operations</div>

            <div class="txt">
                We can do arithmetic operations with variables just like in math. Below are listed different types of
                operations you might need to know:
            </div>


            <div class="table">
                <table>
                    <thead>
                        <td colspan="1" rowspan="1">
                            <p><span>Operator</span></p>
                        </td>
                        <td colspan="1" rowspan="1">
                            <p><span>Description</span></p>
                        </td>
                        <td colspan="1" rowspan="1">
                            <p><span>Operator</span></p>
                        </td>
                        <td colspan="1" rowspan="1">
                            <p><span>Description</span></p>
                        </td>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p><span>+</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>Addition</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>==</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>equal to</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p><span>-</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>Subtraction</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>===</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>equal value and equal type</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p><span>*</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>Multiplication</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>!=</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>not equal</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p><span>**</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>Exponentiation</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>!==</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>not equal value or not equal type</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p><span>/</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>Division</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>&gt;</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>greater than</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p><span>%</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>Modulus (Division Remainder)</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>&lt;</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>less than</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p><span>++</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>Increment</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>&gt;=</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>greater than or equal to</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p><span>--</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>Decrement</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>&lt;=</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>less than or equal to</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p><span>&amp;&amp;</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>logical and</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>!</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>logical not</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1" rowspan="1">
                                <p><span>||</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span>logical or</span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span></span></p>
                            </td>
                            <td colspan="1" rowspan="1">
                                <p><span></span></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="txt">
                An operator should be surrounded by two variables, with which we do it’s operation, here are some
                examples:
            </div>

            <div class="code">
                <p class="c11"><span class="c8">z</span><span class="c7">&nbsp;= </span><span class="c8">x</span><span
                        class="c7">&nbsp;+ </span><span class="c8">y</span><span class="c7 c18">;</span></p>
                <p class="c11"><span class="c8">c</span><span class="c7">&nbsp;= </span><span class="c8">x</span><span
                        class="c7">&nbsp;* </span><span class="c8">y</span><span class="c7 c18">;</span></p>
                <p class="c11"><span class="c8">v</span><span class="c7">&nbsp;= </span><span class="c8">x</span><span
                        class="c7">&nbsp;% </span><span class="c8">y</span><span class="c7 c18">;</span></p>
                <p class="c11 c49"><span class="c7 c18"></span></p>
                <p class="c11"><span class="c8">c</span><span class="c7">&nbsp;&gt;= </span><span
                        class="c8 c18">z</span></p>
                <p class="c11"><span class="c8">v</span><span class="c7">&nbsp;!= </span><span class="c8">c</span></p>
            </div>


            <div class="hint">
                Just play around with those operations to feel comfortable with them.
            </div>



            <div class="sub-title">Comments</div>

            <div class="txt">
                Things that are written after after “//” sign or between “/*” and “*/” signs are called comments, just
                like this:
            </div>

            <div class="code">
                <p class="c11"><span class="c27">var</span><span class="c7">&nbsp;</span><span class="c8">x</span><span
                        class="c7">&nbsp;= </span><span class="c43">5</span><span class="c7">; </span><span
                        class="c30 c18">//
                        Declare x, give it the value of 5</span></p>
            </div>


            <div class="txt">
                Or like this:
            </div>


            <div class="code">
                <p class="c11"><span class="c30 c18">/*</span></p>
                <p class="c11"><span class="c30 c18">The code below will assign value of 2 to variable
                        &#39;y&#39;</span></p>
                <p class="c11"><span class="c30 c18">and then print the following sentence</span></p>
                <p class="c11"><span class="c30 c18">Hello world, this is the 2nd time I am using console</span></p>
                <p class="c11"><span class="c18 c30">*/</span></p>
                <p class="c11 c49"><span class="c7 c18"></span></p>
                <p class="c11"><span class="c27">var</span><span class="c7">&nbsp;</span><span class="c8">y</span><span
                        class="c7">&nbsp;= </span><span class="c43">2</span><span class="c7 c18">;</span></p>
                <p class="c11"><span class="c57">console</span><span class="c7">.</span><span
                        class="c52">log</span><span class="c7">(</span><span class="c16">&quot;Hello world, this is the
                        &quot;</span><span class="c7">&nbsp;+
                    </span><span class="c8">y</span><span class="c7">&nbsp;+ </span><span class="c16">&quot;nd time I am
                        using
                        console&quot;</span><span class="c7 c18">);</span></p>
            </div>


            <div class="txt">
                What are comments for? They are used for making notes in a code, they are not being executed, so the
                computer neglects them, so write whatever you want in it.
            </div>


            <div class="note">
                <span class="note-keyword">Note</span>: Instead of explaining what you wanted and why you wanted to do
                that in your code make things
                obvious, by writing simple and clean code.
            </div>


            <div class="sub-title">Data Types</div>

            <div class="txt">
                As it’s been already mentioned above we can store information in multiple forms or as we call it here
                data types. Here are some examples:
            </div>

            <div class="code">
                <p class="c11"><span class="c27">var</span><span class="c7">&nbsp;</span><span
                        class="c8">length</span><span class="c7">&nbsp;= </span><span class="c43">16</span><span
                        class="c7">; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span><span
                        class="c30 c18">// Number
                        (int)</span></p>
                <p class="c11"><span class="c27">var</span><span class="c7">&nbsp;</span><span
                        class="c8">lastName</span><span class="c7">&nbsp;= </span><span
                        class="c16">&quot;Johnson&quot;</span><span class="c7">; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="c30 c18">//
                        String
                        (str)</span></p>
                <p class="c11"><span class="c27">var</span><span class="c7">&nbsp;</span><span
                        class="c8">cars</span><span class="c7">&nbsp;= [</span><span
                        class="c16">&quot;Saab&quot;</span><span class="c7">, </span><span
                        class="c16">&quot;Volvo&quot;</span><span class="c7">, </span><span
                        class="c16">&quot;BMW&quot;</span><span class="c7">]; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    </span><span class="c30 c18">// Array (list of
                        elements)</span></p>
                <p class="c11"><span class="c27">var</span><span class="c7">&nbsp;</span><span class="c8">x</span><span
                        class="c7">&nbsp;= {</span><span class="c8">firstName:</span><span
                        class="c16">&quot;John&quot;</span><span class="c7">, </span><span
                        class="c8">lastName:</span><span class="c16">&quot;Doe&quot;</span><span class="c7">}; &nbsp;
                        &nbsp;</span><span class="c30">// Object</span></p>
            </div>


            <div class="sub-title">Functions</div>

            <div class="txt">
                Now let’s get into the functions. Functions mostly are the same here as in math. The idea is that you
                give some input(s) some things happen inside of it and then you get an output. While in programming a
                function can take no inputs and it can return more than one value. To define your first function do the
                following:
            </div>

            <div class="code">
                <p class="c11"><span class="c27">function</span><span class="c7">&nbsp;</span><span
                        class="c52">product</span><span class="c7">(</span><span class="c8">p1</span><span class="c7">,
                    </span><span class="c8">p2</span><span class="c7 c18">) {</span></p>
                <p class="c11"><span class="c7">&nbsp; &nbsp;</span><span class="c31">return</span><span
                        class="c7">&nbsp;</span><span class="c8">p1</span><span class="c7">&nbsp;* </span><span
                        class="c8">p2</span><span class="c7 c18">;</span></p>
                <p class="c11"><span class="c7 c18">}</span></p>
            </div>

            <div class="txt">
                To define a function we use the keyword “function” and then comes the name of the function, after which
                we need to have opening and closing brackets, you can put nothing between those if you want to get no
                inputs, otherwise you need to separate the names of the variables by comma(s). With curly brackets we
                define the body of the function inside of which the logic of this function will be represented. With the
                keyword “return” we give the expression or the variable that we want to be returned from the function.
                Try to write functions for addition division and so on.
            </div>

            <div class="txt">
                What functions are for ? There are pieces of codes which can be used multiple times, in other words if
                you have an action which should be done more than once you can write a function for it to be done.
            </div>

            <div class="txt">
                For example let’s say you want to get a greeting message by having a persons name, so you can do the
                following.
            </div>

            <div class="code">
                <p class="c11"><span class="c27">function</span><span class="c7">&nbsp;</span><span
                        class="c52">greetUser</span><span class="c7">(</span><span class="c8">first_name</span><span
                        class="c7 c18">) {</span></p>
                <p class="c11"><span class="c7">&nbsp; &nbsp;</span><span class="c27">let</span><span
                        class="c7">&nbsp;</span><span class="c8">greeting</span><span class="c7">&nbsp;= </span><span
                        class="c16">&quot;Hi, dear
                        &quot;</span><span class="c7">&nbsp;+ </span><span class="c8">first_name</span><span
                        class="c7">&nbsp;+
                    </span><span class="c16">&quot; it&#39;s a great pleasure to see back again&quot;</span><span
                        class="c7 c18">;</span></p>
                <p class="c11"><span class="c7">&nbsp; &nbsp;</span><span class="c31">return</span><span
                        class="c7">&nbsp;</span><span class="c8">greeting</span><span class="c7 c18">;</span></p>
                <p class="c11"><span class="c7 c18">}</span></p>
            </div>

            <div class="txt">
                Now, to execute or see results of those functions we need to call them, like this:
            </div>

            <div class="code">
                <p class="c11"><span class="c27">var</span><span class="c7">&nbsp;</span><span
                        class="c8">the_product</span><span class="c7">&nbsp;= </span><span
                        class="c52">product</span><span class="c7">(</span><span class="c43">5</span><span class="c7">,
                    </span><span class="c43">6</span><span class="c7 c18">);</span></p>
                <p class="c11"><span class="c57">console</span><span class="c7">.</span><span
                        class="c52">log</span><span class="c7">(</span><span class="c8">the_product</span><span
                        class="c7 c18">);</span></p>
                <p class="c11 c49"><span class="c7 c18"></span></p>
                <p class="c11"><span class="c27">var</span><span class="c7">&nbsp;</span><span
                        class="c8">the_message</span><span class="c7">&nbsp;= </span><span
                        class="c52">greetUser</span><span class="c7">(</span><span
                        class="c16">&quot;John&quot;</span><span class="c7 c18">);</span></p>
                <p class="c11"><span class="c57">console</span><span class="c7">.</span><span
                        class="c52">log</span><span class="c7">(</span><span class="c8">the_message</span><span
                        class="c7">);</span></p>
            </div>


            <div class="txt">
                Here we call our good old friend console.log and give to it the variable which contains the value
                returned by the “greetUser” function.
            </div>

            <div class="txt">
                Doesn’t the function you have just created look like the console.log ? Guess what “log” is also a
                function, a default function created by JS programmers.
            </div>


            <div class="sub-title">Loops</div>

            <div class="txt">
                To periodically perform an action or actions we can use something called loop. Loops are handy, if you
                want to run the same code over and over again, each time with a different value. Often this is the case
                when working with arrays:
            </div>

            <div class="code">
                <p class="c11"><span class="c27">var</span><span class="c7">&nbsp;</span><span
                        class="c8">text</span><span class="c7">&nbsp;= </span><span class="c16">&quot;&quot;</span><span
                        class="c7 c18">;</span></p>
                <p class="c11 c49"><span class="c7 c18"></span></p>
                <p class="c11"><span class="c31">for</span><span class="c7">&nbsp;(</span><span
                        class="c27">var</span><span class="c7">&nbsp;</span><span class="c8">i</span><span
                        class="c7">&nbsp;= </span><span class="c43">0</span><span class="c7">; </span><span
                        class="c8">i</span><span class="c7">&nbsp;&lt;
                    </span><span class="c8">cars</span><span class="c7">.</span><span class="c8">length</span><span
                        class="c7">;
                    </span><span class="c8">i</span><span class="c7 c18">++) {</span></p>
                <p class="c11"><span class="c7">&nbsp; &nbsp;</span><span class="c8">text</span><span
                        class="c7">&nbsp;+=
                    </span><span class="c8">cars</span><span class="c7">[</span><span class="c8">i</span><span
                        class="c7">] +
                    </span><span class="c16">&quot;&lt;br&gt;&quot;</span><span class="c7 c18">;</span></p>
                <p class="c11"><span class="c7 c18">}</span></p>
                <p class="c11 c49"><span class="c7 c18"></span></p>
                <p class="c11"><span class="c57">console</span><span class="c7">.</span><span
                        class="c52">log</span><span class="c7">(</span><span class="c8">text</span><span
                        class="c7">);</span></p>
            </div>

            <div class="txt">
                We start the block of a “for” loop with the keyword “for” then inside of the brackets we define a
                iterator (in this case it’s “i”) after which comes the statement by which we give the loop the number of
                iterations it should do, and then comes the incrementing operation. Inside of the body of the “for” loop
                we add and assign to the text variable the values inside of the array. After which we print it.
            </div>

            <div class="txt">
                There are different kinds of loops:
            </div>

            <div class="list">
                <p><span class="label">for</span><span class="value"> - loops through a block of code a number of
                        times</span></p>
                <p><span class="label">for/in</span><span class="value"> - loops through the properties of an
                        object</span></p>
                <p><span class="label">for/of</span><span class="value"> - loops through the values of an iterable
                        object</span></p>
                <p><span class="label">while</span><span class="value"> - loops through a block of code while a
                        specified condition is true</span></p>
                <p><span class="label">do/while</span><span class="value"> - also loops through a block of code while a
                        specified condition is true</span></p>
            </div>

            <div class="txt">
                This was a brief introduction to JS, for more information you can check the provided sources.
            </div>


            <div class="sub-title">DOM</div>

            <div class="txt">
                Now, comes the most interesting part from Data Scraping perspective. It turns out that with the help of
                JS we can modify the HTML of a webpage on fly. It turns out that JS sees a html page as a DOM (Document
                Object Model) object which can be modified by it .Why would we or a web page developer ever need to do
                this, to load data based on a user's needs, to make the webpage load faster and be agile, and maybe to
                put in some design flavours. Let us look at a very basic example to see how we can add HTML into our
                default structure.
            </div>


            <div class="code">
                <p class="c11"><span class="c27">var</span><span class="c7">&nbsp;</span><span
                        class="c8">myVar</span><span class="c7">&nbsp;= </span><span class="c52">setInterval</span><span
                        class="c7">(</span><span class="c8">myTimer</span><span class="c7">, </span><span
                        class="c43">1000</span><span class="c7 c18">);</span></p>
                <p class="c11 c49"><span class="c7 c18"></span></p>
                <p class="c11"><span class="c27">function</span><span class="c7">&nbsp;</span><span
                        class="c52">myTimer</span><span class="c7 c18">() {</span></p>
                <p class="c11"><span class="c7">&nbsp;</span><span class="c27">var</span><span
                        class="c7">&nbsp;</span><span class="c8">d</span><span class="c7">&nbsp;= </span><span
                        class="c27">new</span><span class="c7">&nbsp;</span><span class="c57">Date</span><span
                        class="c7 c18">();</span></p>
                <p class="c11"><span class="c7">&nbsp;</span><span class="c8">document</span><span
                        class="c7">.</span><span class="c52">getElementById</span><span class="c7">(</span><span
                        class="c16">&quot;modifiable&quot;</span><span class="c7">).</span><span
                        class="c8">innerHTML</span><span class="c7">&nbsp;= </span><span class="c8">d</span><span
                        class="c7">.</span><span class="c52">toLocaleTimeString</span><span class="c7 c18">();</span>
                </p>
                <p class="c11"><span class="c7 c18">}</span></p>
            </div>


            <div class="txt">
                In this code we are setting an interval to execute the “myTimer” function every 1000ms (1s), and after
                the set time ends the function is called. Inside of the function we get the current date and assign it
                to the variable “d” and then we modify the text of an element which has “modifiable” id by setting it’s
                innerHTML property.
            </div>

            <div class="txt">
                If you did everything right you will see the text of that element updating every second and showing you
                the current time.
            </div>


            <div class="sub-title">Events</div>

            <div class="txt">
                HTML events are "things" that happen to HTML elements. When JS is used in HTML pages, it can "react" to
                these events. For instance an HTML web page has finished loading, an HTML input field was changed, an
                HTML button was clicked and so on.
            </div>

            <div class="txt">
                Often, when events happen, you may want to do something so JS lets you execute code when events are
                detected. The professional way of handling events is to get the element in JS on which you want to
                assign an event, and then give a function to that event.
                For example if we want to get the input field value once a user types something in it you can do the
                following:
            </div>

            <div class="code">
                <p class="c11"><span class="c3">&lt;</span><span class="c27">input</span><span
                        class="c7">&nbsp;</span><span class="c8">type</span><span class="c7">=</span><span
                        class="c16">&quot;text&quot;</span><span class="c7">&nbsp;</span><span class="c8">id</span><span
                        class="c7">=</span><span class="c16">&quot;comment&quot;</span><span class="c3 c18">&gt;</span>
                </p>
            </div>

            <br>

            <div class="code">
                <p class="c11"><span class="c27">var</span><span class="c7">&nbsp;</span><span
                        class="c8">comment_field</span><span class="c7">&nbsp;= </span><span
                        class="c8">document</span><span class="c7">.</span><span class="c52">getElementById</span><span
                        class="c7">(</span><span class="c16">&quot;comment&quot;</span><span class="c7 c18">);</span>
                </p>
                <p class="c11"><span class="c8">comment_field</span><span class="c7">.</span><span
                        class="c52">addEventListener</span><span class="c7">(</span><span
                        class="c16">&quot;keyup&quot;</span><span class="c7">, </span><span
                        class="c52">getInput</span><span class="c7 c18">);</span></p>
                <p class="c11 c49"><span class="c7 c18"></span></p>
                <p class="c11"><span class="c27">function</span><span class="c7">&nbsp;</span><span
                        class="c52">getInput</span><span class="c7 c18">() {</span></p>
                <p class="c11"><span class="c7">&nbsp; &nbsp;</span><span class="c8">console</span><span
                        class="c7">.</span><span class="c52">log</span><span class="c7">(</span><span
                        class="c8">comment_field</span><span class="c7">.</span><span class="c8">value</span><span
                        class="c7 c18">);</span></p>
                <p class="c11"><span class="c7">}</span></p>
            </div>

            <div class="txt">
                Here we are firing “keyup” event, so whenever a key is up after being pressed this function will be
                running, here is a list of the mostly used events:
            </div>


            <div class="list">
                <p><span class="label">onchange</span><span class="value"> - an HTML element has been changed</span></p>
                <p><span class="label">onclick</span><span class="value"> - the user clicks an HTML element</span></p>
                <p><span class="label">onmouseover</span><span class="value"> - the user moves the mouse over an HTML
                        element</span></p>
                <p><span class="label">onmouseout</span><span class="value"> - the user moves the mouse away from an
                        HTML element</span></p>
                <p><span class="label">onkeydown</span><span class="value"> - the user pushes a keyboard key</span></p>
                <p><span class="label">onload</span><span class="value"> - the browser has finished loading the
                        page</span></p>
            </div>


            <div class="txt">
                Another example:
            </div>


            <div class="code">
                <p class="c11"><span class="c27">var</span><span class="c7">&nbsp;</span><span
                        class="c8">greet_button</span><span class="c7">&nbsp;= </span><span
                        class="c8">document</span><span class="c7">.</span><span class="c52">getElementById</span><span
                        class="c7">(</span><span class="c16">&quot;greedy_action&quot;</span><span
                        class="c7 c18">);</span></p>
                <p class="c11 c49"><span class="c7 c18"></span></p>
                <p class="c11"><span class="c8">greet_button</span><span class="c7">.</span><span
                        class="c52">addEventListener</span><span class="c7">(</span><span
                        class="c16">&quot;click&quot;</span><span class="c7">, </span><span
                        class="c52">displayGreet</span><span class="c7 c18">());</span></p>
                <p class="c11 c49"><span class="c7 c18"></span></p>
                <p class="c11"><span class="c27">function</span><span class="c7">&nbsp;</span><span
                        class="c52">displayGreet</span><span class="c7 c18">() {</span></p>
                <p class="c11"><span class="c7">&nbsp; &nbsp;</span><span class="c27">var</span><span
                        class="c7">&nbsp;</span><span class="c8">new_element</span><span class="c7">&nbsp;= </span><span
                        class="c8">document</span><span class="c7">.</span><span class="c52">createElement</span><span
                        class="c7">(</span><span class="c16">&quot;div&quot;</span><span class="c7 c18">);</span></p>
                <p class="c11"><span class="c7">&nbsp; &nbsp;</span><span class="c8">new_element</span><span
                        class="c7">.</span><span class="c8">innerHTML</span><span class="c7">&nbsp;= (</span><span
                        class="c52">greetUser</span><span class="c7">(</span><span
                        class="c16">&quot;Jessy&quot;</span><span class="c7 c18">));</span></p>
                <p class="c11 c49"><span class="c7 c18"></span></p>
                <p class="c11"><span class="c7">&nbsp; &nbsp;</span><span class="c8">greet_button</span><span
                        class="c7">.</span><span class="c8">parentNode</span><span class="c7">.</span><span
                        class="c52">insertBefore</span><span class="c7">(</span><span class="c8">new_element</span><span
                        class="c7">, </span><span class="c8">greet_button</span><span class="c7">.</span><span
                        class="c8">nextSibling</span><span class="c7 c18">)</span></p>
                <p class="c11"><span class="c7 c18">}</span></p>
            </div>

            <div class="txt">
                First we get the button element with “greedy_action” id then we add an event to it (a click event), so
                whenever a users clicks on that button the “displayGreet” function will be called, inside of which we
                create a div element and add a text to it, after which we assign that new element to the parent element
                of the button element.
            </div>


        </div>
    </div>



    <div class="container">
        <div class="resources">
            <div class="resources-title">Resources</div>
            <div class="resources-list">
                <a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" class="link">https://developer.mozilla.org/en-US/docs/Web/JavaScript</a>
                <a target="_blank" href="https://www.w3schools.com/js/" class="link">https://www.w3schools.com/js/</a>
                <a target="_blank" href="https://www.youtube.com/watch?v=W6NZfCO5SIk&t=6s" class="link">https://www.youtube.com/watch?v=W6NZfCO5SIk&t=6s</a>
                <a target="_blank" href="https://www.youtube.com/watch?v=hdI2bqOjy3c" class="link">https://www.youtube.com/watch?v=hdI2bqOjy3c</a>
            </div>
        </div>
    </div>



<?php include "footer.php" ?>