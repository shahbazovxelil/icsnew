


    <!DOCTYPE html>
    <html>
    <head>
        <title>Admin Login</title>
        <style>
            .container {
                max-width: 100%;
                height: 600px;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                background-color: #f9f9f9;
                text-align: center;

            }

            h2 {
                text-align: center;
            }

            label {
                display: block;
                margin-bottom: 5px;
            }

            input[type="email"],
            input[type="password"] {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                margin-bottom: 10px;
            }

            span {
                color: red;
                font-size: 14px;
            }

            button {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            button:hover {
                background-color: #45a049;
            }
        </style>


    </head>
    <body>
    <div class="container">
        <h2>EDUINT LOGIN</h2>
        @if($errors->any())
            <div class="alert alert-danger">
                {{$errors->first()}}
            </div>
        @endif

        <form method="POST" action="{{ route('loginPost') }}">
            @csrf
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required >
                @error('email')
                <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                <span>{{ $message }}</span>
                @enderror
            </div>



            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
    </body>
    </html>
