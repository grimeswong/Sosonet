@extends('layouts.master')

@section('title')
    Documentation Page
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-8">
            <h3>This website fulfill and complete all the below requirements</h3>
            <p>1. All pages must have a navigation menu, either across the top of the page or down the left or right column.</p>
            <p>2. The home page must display all posts, in reverse-order of creation (most recent posts first).</p>
            <p>3. The home page must display a form for the user to create a new post. After a new post is successfully created, it should redirect back to the home page.</p>
            <p>4. Each post should contain an icon (all posts can have the same icon).</p>
            <p>5. Each post should contain a title, a message, and a user’s name (the user is not required to login, they can simply enter their name in the post form).</p>
            <p>6. Each post should indicate the number of comments.</p>
            <p>7. Each post should have edit and delete buttons or links.</p>
            <p>8. Each post should have a view comments link.
            <p>9. When the edit button is pressed an edit page should be displayed which presents a form to edit the contents of the post. 
            A cancel button on this page simply redirects back to the home page without any changes. A save button, updates the post and redirects to the view comments page.</p>
            <p>10. When the view comments link is pressed, a new page (the view comments page) is displayed
            showing the post as well as all of the comments.</p>
            <p>11. The view comments page should contain a form to add a new comment to the post.</p>
            <p>12. Comments have a message and a user, but no title.</p>
            <p>13. Comments have a delete button but no edit button. Deleting a comment should redirect to the view comments page.</p>
            <p>14. This assignment must be implemented using Laravel and the DB class.</p>
        </div>
        <div class="col-sm-4">
            <h3>Extra information for implementation</h3>
            <p>1. Use bootstrap panel for posts, badge for number of comments</p>
            <p>2. Use database left join for calculation of the post's comments on the home page</p>
            <p>3. Applied Input validation that check empty input and range for avoiding database violence</p>
            <p>4. Documentation and ER diagram documented as web pages</p>
        </div>
    </div>
@endsection('content')