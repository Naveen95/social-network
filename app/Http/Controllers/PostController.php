<?php 
namespace App\Http\Controllers;

use App\Post;
use App\Like;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
//use Illuminate\Contracts\Auth\User;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;



class PostController extends Controller
{

	public function post(Request $request)
	{

		$this->validate($request,
			[
			'userpost' => 'required']);

			$post = $request->all();
			$userid = \Auth::user()->id;
			$userpost = array(
			'userpost' => $post['userpost'] ,
			'user_id' => $userid,

			);
		

			if ($addpost = DB::table('posts')->insert($userpost))
			 {

	            $message = 'Post Successfully Created';
			 }

			 return redirect()->route('home')->with(['message'=>$message]);
		
	}
		public function showPost()
		{

			 $posts = Post::orderBy('created_at', 'desc')->get();
			 return view('unsayd' , ['posts' => $posts]);


		}


		public function deletePost($post_id)

		{

			 $post = Post::where('id', $post_id)->first();
			 if (Auth::user() != $post->user)
			  {
                 return redirect()->back();
        	  }
			 $post->delete();
			 return redirect()->route('unsayd')->with(['message'=> 'Successfully deleted!']);
		}

		public function showProfile($username)
		{
			$user_details = User::get()->where('name',$username);
			return view('profile-page',['user_details'=>$user_details]);
			//return "hello" . $username;
		}

		public function editPost(Request $request)
		{
			        $this->validate($request, [
			            'body' => 'required'
			        ]);
			        $post = Post::find($request['postId']);
			        if (Auth::user() != $post->user) {
			            return redirect()->back();
			        }
			        $post->userpost = $request['body'];
			        $post->update();
			        return response()->json(['new_body' => $post->userpost], 200);

		}

		public function likePost(Request $request)
		{

			$post_id = $request['postId'];
			$is_Like = $request['isLike'] === 'true';
			$update = false ;
			$post = Post::find($post_id);
			if(!post)
			{
				return null;	
			}
			$user = \Auth::user();
			$like = $user->likes()->where('post_id',$post_id)->first();


			if($like)
			{
				$already_like = $like->like;
				$update = true;

				if ($already_like == $isLike) {
					
					$like->delete();
					return null;
				}
			}
			else
			{
				$like = new Like();


			}
			$like->like = $is_Like;
			$like->user_id = $user->id;
			$like->post_id = $post->id;

			if($update)
			{
				$like->update();

			}
			else
			{
				$like->save();
			}

			return null;

		}
	

}


?>