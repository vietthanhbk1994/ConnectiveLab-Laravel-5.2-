<!--/*
    *----------------------------
    * CREATE: Ngo-Viet-Thanh
    * DATE: 02/08/2016
    * CONTENT: Content mail when send mail to contact
    *----------------------------
    */-->
You received a contact message:

<p>
    <b>Name:</b> {{ $name }}
</p>

<p>
    <b>Email:</b> {{ $email }}
</p>

<p>
    <b>Company:</b>{{ $company }}
</p>

<p>
<h4>Content:</h4>
{{ $user_message }}
</p>