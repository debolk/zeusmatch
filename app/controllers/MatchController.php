<?php

class MatchController extends BaseController
{
    /**
     * Shows the main matching page
     * @return void
     */
    public function index()
    {
        $this->layout->with('page_id', 'match');

        if(!Auth::check())
            return Redirect::action('SplashController@index');

        $user = User::random()->first();
        $birth = new DateTime($user['birthday']);
        $now = new DateTime();
        $age = $now->diff($birth);

        $this->layout->content = View::make('match/index', array('user' => $user, 'age' => $age));
    }

    /**
     * Likes or dislikes another user
     * @param int $other_id ID of the user that is judged
     * @return Redirect to the main UI
     */
    public function like($other_id)
    {
        // Only allow authenticated users
        if(!Auth::check()) {
            App::abort(401, 'Must login to like people');
        }

        $current_user = Auth::user();

        // A user cannot (dis)like itself
        // if ($current_user->id === $other_id) {
        //     App::abort(403, 'You cannot (dis)like yourself');
        // }

        // Write the like
        $like = Like::firstOrCreate(['from_id' => $current_user->id, 'to_id' => $other_id]);
        $like->positive = Input::has('positive');
        $like->save();

        // Show the next user in the UI
        return Redirect::to('/match');
    }
}
