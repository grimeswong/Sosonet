@extends('layouts.master')

@section('title')
    Documentation Page
@endsection

@section('content')
    <div class="row">
        <div class="col-md-offset-2 col-md-8 col-sm-12">
            <h3>The below requirements are implemented</h3>
            <p>. Implement the functionalities from Assignment 1 to use migrations, seeders, model, contollers, and the Validator class</p>
            <p>. Users of the website can search for other users without being logged in.</p>
            <p>. When selecting a user the profile page for the user will be shown (the profile page will show the user's age not date of birth</p>
            <p>. If user is not logged in, they cannot comment on any posts or make any posts</p>
            <p>. A user can create a new account through a link/button in the navigation menu</p>
            <p>. A user may log in using a login link/button in the navigation menu</p>
            <p>. The user must login using their email address and password</p>
            <p>. When logged in a user will be able to perform the following</p>
            <p>. This image will be displayed in search results, friends lists, and all posts and commments made by this user</p>
            <p>. A link/button in the navigation menu should list a user's friends</p>
            <p>. The profile page will only show public posts from that user if no user is currently logged in.</p>
            <p>. The privacy of a post can be edited at later date</p>
            <p>. Comments should be displayed using pagination with no more than 6 comments per page</p>
            <ul>
                <li>Add, edit, and delete their own posts</li>
                <li>Add and delete their own comments</li>
            </ul>
            <br/>
            <h3>The below requirements are not fully implemented</h3>
            <p>. If the user is logged in and is a friend then posts visible to both public and friends will also be shown and also a remove friend button should be displayed to allow removal of this friend</p>
            <p>. If the logged in user is not a friend, then an add friend button will be displayed to add this user as a friend</p>
            <p>. A logged in user can add another user as a friend</p>
            <p>. The profile page of a user should indicate whether they are a friend. If they are a friend then there should be an option to unfriend them</p>
            <p>. Privacy Levels are not fully applied</p>
            <p>. Cannot remove a user</p>

            <h3>Extra information for implementation</h3>
            <p>1. Documentation and ER diagram documented as web pages</p>
            <p>2. Use bootstrap panel for posts, badge for number of comments</p>
            <p>3. Use nav search bar for search users</p>

        </div>
    </div>
@endsection('content')
