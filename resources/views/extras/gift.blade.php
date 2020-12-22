<html>
<head>
    <title>Christmas Gift Page</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/@tailwindcss/typography@0.2.x/dist/typography.min.css" rel="stylesheet"/>
    <style>
        a { color: #fff !important; text-decoration: none !important;}
    </style>
</head>
<body>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-center text-2xl mt-20 text-red-800">Happy Holidays From Nick!</h2>
        <div class="bg-white overflow-hidden shadow rounded-lg mt-20 mb-20">
            <div class="px-4 py-5 sm:p-6" style="text-align: center;">
                <img src="{{ asset('img/xmas/' . $data['image']) }}" style="display: block;
  margin-left: auto;
  margin-right: auto; width: 50%">
                <h3 class="d-block text-xl mt-3">{{ $data['name'] }}</h3>
                <a class="mt-2 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ $data['card'] }}" target="_blank">View Your Card</a>
            </div>
            <div class="bg-gray-50 px-4 py-4 sm:px-6">
                <div class="prose">
                    <p>Congrats, you solved the puzzle!</p>

                    <p>Thank you everyone for all your hard work this last year.  Even with all the craziness you all proved yourselves to be true professionals and I really appreciate it as a manager.</p>

                    <p>Anyway, sorry to make you work a little more for your Christmas gift, but hopefully you had some fun with it!</p>

                    <p>These are regular Visa Gift Cards, feel free to buy anything you like from anywhere. But just in case you need some ideas, I have compiled a list of a few cool engineering items to check out.  Note: if you decide to pick a book -- talk to me about expensing first and buy something else ;)</p>

                    <p>See everyone in 2021!</p>
                    <hr>
                    <ul>
                        <li>
                            <h4>Keychron K8 Keyboard</h4>
                            <p>I use this as my personal keyboard and just love it. It's a little more than $50, but if you're in the market for a new keyboard this is the one. Bluetooth, Mechanical, OSX keys, backlights, and lots of options. </p>
                            <a class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="https://www.keychron.com">Keychron Mechanical Keyboard</a>
                        </li>
                        <li>
                            <h4>Tinkerwell.app</h4>
                            <p>Awesome little PHP REPL, can hooks directly into your projects via Vagrant, Docker, etc. </p>
                            <a class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="https://tinkerwell.app/" target="_blank">Tinkerwell PHP REPL</a>
                        </li>
                        <li>
                            <h4>Front Line PHP Book/Course</h4>
                            <p>On my xmas list! New book by the guys who write all our Laravel packages. Covers modern PHP development, including PHP8, preloading, async PHP, etc.  FYI this is also a little more than $50</p>
                            <a class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="https://front-line-php.com/" target="_blank">Front Line PHP</a>
                        </li>
                        <li>
                            <h4>Hands On High Performance Javascript</h4>
                            <p>New JS book I was interested in -- covering Node, Svelte, WebAssembly.</p>
                            <a class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="https://www.amazon.com/dp/B082T14XFZ?tag=uuid10-20" target="_blank">Hands On High Performance Javascript</a>
                        </li>
                        <li>
                            <h4>Grokking Algorithms Book</h4>
                            <p>A great and gentle intro book to Algorithms some more general Computer Science concepts.</p>
                            <a class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="https://www.amazon.com/Grokking-Algorithms-illustrated-programmers-curious/dp/1617292230" target="_blank">Grokking Algorithms Book</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
