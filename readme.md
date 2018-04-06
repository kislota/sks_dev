<h1>Login</h1>

<h2>Method post</h2>
<p><b>email:</b> email@mail.com</p>
<p><b>password:</b> password</p>
<p><b>URL: </b>http://localhost/api/auth/login</p>
<p><b>Answer</b></p>
<pre>{
    "access_token": "JWT_TOKEN",
    "token_type": "bearer",
    "expires_in": 3600
}</pre>
<h2>Method post</h2>
<p><b>Authorization:</b> Bearer JWT_TOKEN</p>
<p><b>URL: </b>http://localhost/api/auth/me</p>
<pre>{
    "data": {
        "user": {
            "id": 1,
            "name": "name",
            "email": "email@mail.com"
        },
        "comments": [
                        {
                            "id": 1,
                            "user_id": 1,
                            "text": "User comments"
                        },
                    ]
        },
    "status": "success_user"
}</pre>
<h1>Register</h1>
<h2>Method post</h2>
<p><b>name:</b> username</p>
<p><b>email:</b> email@mail.com</p>
<p><b>password:</b> password</p>
<p><b>URL: </b>http://localhost/api/auth/register</p>
<pre>{
    "access_token": "JWT_TOKEN",
    "token_type": "bearer",
    "expires_in": 3600
}</pre>
<h1>Logout</h1>
<h2>Method post</h2>
<p><b>Authorization:</b> Bearer JWT_TOKEN</p>
<p><b>URL: </b>http://localhost/api/auth/logout</p>
<pre>{
    "message": "Successfully logged out"
}</pre>
<h2>Method get</h2>
<p><b>Authorization:</b> Bearer JWT_TOKEN</p>
<p><b>URL: </b>http://localhost/api/auth/users</p>
<pre>{
"data":
    {
    "user":
        {
        "id":1,
        "name":"username",
        "email":"email@mail.com"
        },
    "comments":[
        {
        "id":1,
        "user_id":1,
        "text":"User comments"
        }
        ]
    },
"status":"success_user"
}</pre>
<h2>Method get</h2>
<p><b>Authorization:</b> Bearer JWT_TOKEN</p>
<p><b>URL: </b>http://localhost/api/auth/users</p>
<pre>[
    {
    "user":
        {
        "id":1,
        "name":"username",
        "email":"email@mail.com"
        },
    "comments":[
        {
        "id":1,
        "user_id":1,
        "text":"User comments"
        },
        {
        "id":2,
        "user_id":1,
        "text":"User comments"
        }
        ]
    },
    {
    "user":
        {
        "id":2,
        "name":"username",
        "email":"email@mail.com"
        },
    "comments":[
        {
        "id":3,
        "user_id":2,
        "text":"User comments"
        },
        {
        "id":4,
        "user_id":2,
        "text":"User comments"
        }
        ]
    },
]
</pre>
<h2>Method put</h2>
<p><b>Authorization:</b> Bearer JWT_TOKEN</p>
<p><b>URL: </b>http://localhost/api/auth/user</p>