<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class HomeController extends Controller
{
    /*
     * Dashboard Pages Routes
     */
    public function edit($id)
    {
        $users = User::findOrFail($id);
        dd($users);
    }



    public function index(Request $request)
    {
        return view('dashboards.index');
    }
    public function newsfeed(Request $request)
    {
        return view('dashboards.newsfeed');
    }

    public function profile(Request $request)
    {
        return view('dashboards.profile');
    }
    public function profileedit(Request $request)
    {
        $users = auth()->user();
        return view('dashboards.profileedit', compact('users'));
    }
    public function accountsetting(Request $request)
    {
        return view('dashboards.accountsetting');
    }
    public function privacysetting(Request $request)
    {
        return view('dashboards.privacysetting');
    }
    public function friendlist(Request $request)
    {
        return view('dashboards.friendlist');
    }

    public function group(Request $request)
    {
        return view('dashboards.group');
    }
    public function groupdetail(Request $request)
    {
        return view('dashboards.groupdetail');
    }
    public function proimg(Request $request)
    {
        return view('dashboards.proimg');
    }
    public function provideos(Request $request)
    {
        return view('dashboards.provideos');
    }
    public function profilevent(Request $request)
    {
        return view('dashboards.profilevent');
    }
    public function profilebadges(Request $request)
    {
        return view('dashboards.profilebadges');
    }
    public function profileforum(Request $request)
    {
        return view('dashboards.profileforum');
    }
    public function notification(Request $request)
    {
        return view('dashboards.notification');
    }
    public function file(Request $request)
    {
        return view('dashboards.file');
    }
    public function friendrequest(Request $request)
    {
        return view('dashboards.friendrequest');
    }
    public function chat(Request $request)
    {
        return view('dashboards.chat');
    }
    public function todo(Request $request)
    {
        return view('dashboards.todo');
    }

    public function calender(Request $request)
    {
        return view('dashboards.calender');
    }
    public function birthday(Request $request)
    {
        return view('dashboards.birthday');
    }
    public function weather(Request $request)
    {
        return view('dashboards.weather');
    }
    public function music(Request $request)
    {
        return view('dashboards.music');
    }
    public function friendprofile(Request $request)
    {
        return view('dashboards.friendprofile');
    }
    /*layout*/
    public function withoutrightsidebar(Request $request)
    {
        return view('dashboards.withoutrightsidebar');
    }
    public function withoutleftsidebar(Request $request)
    {
        return view('dashboards.withoutleftsidebar');
    }

    /*blog pages*/
    public function bloggrid()
    {
        return view('blog.bloggrid');
    }
    public function bloglist()
    {
        return view('blog.bloglist');
    }
    public function blogdetail()
    {
        return view('blog.blogdetail');
    }

    /*market paages*/
    public function market1()
    {
        return view('market.market1');
    }
    public function market2()
    {
        return view('market.market2');
    }
    /*profile paages*/
    public function profile1()
    {
        return view('profile.profile1');
    }
    public function profile2()
    {
        return view('profile.profile2');
    }
    public function profile3()
    {
        return view('profile.profile3');
    }

    /*store pages*/
    public function grid(Request $request)
    {
        return view('store.grid');
    }
    public function list(Request $request)
    {
        return view('store.list');
    }
    public function detail(Request $request)
    {
        return view('store.detail');
    }
    public function productdetail(Request $request)
    {
        return view('store.productdetail');
    }
    public function checkout(Request $request)
    {
        return view('store.checkout');
    }

    /*email pages*/
    public function email(Request $request)
    {
        return view('mailbox.email');
    }
    public function emailcompose(Request $request)
    {
        return view('mailbox.emailcompose');
    }
    /*form pages*/
    public function formcheckbox(Request $request)
    {
        return view('ui.formcheckbox');
    }
    public function formlayout(Request $request)
    {
        return view('ui.formlayout');
    }
    public function formradio(Request $request)
    {
        return view('ui.formradio');
    }
    public function formswitch(Request $request)
    {
        return view('ui.formswitch');
    }
    public function formvalidation(Request $request)
    {
        return view('ui.formvalidation');
    }
    /*table pages*/
    public function tablebasic(Request $request)
    {
        return view('ui.tablebasic');
    }
    public function datatable(Request $request)
    {
        $users = User::all();
        return view('ui.datatable', compact('users'));
    }
    public function tableedit(Request $request)
    {
        return view('ui.tableedit');
    }

    /*form pagees*/
    public function formwizard(Request $request)
    {
        return view('ui.formwizard');
    }
    public function formwizardvalidate(Request $request)
    {
        return view('ui.formwizardvalidate');
    }
    public function formwizardvertical(Request $request)
    {
        return view('ui.formwizardvertical');
    }
    /*icon pages*/
    public function iconfontawsome(Request $request)
    {
        return view('ui.iconfontawsome');
    }
    public function iconlineawsome(Request $request)
    {
        return view('ui.iconlineawsome');
    }
    public function iconremixon(Request $request)
    {
        return view('ui.iconremixon');
    }
    public function iconmaterial(Request $request)
    {
        return view('ui.iconmaterial');
    }

    /*pages*/
    public function signin(Request $request)
    {
        return view('pages.signin');
    }
    public function signup(Request $request)
    {
        return view('pages.signup');
    }
    public function pagerecover(Request $request)
    {
        return view('pages.pagerecover');
    }
    public function pageconfirmail(Request $request)
    {
        return view('pages.pageconfirmail');
    }
    public function lockscreen(Request $request)
    {
        return view('pages.lockscreen');
    }
    /*extrapage*/
    public function timeline(Request $request)
    {
        return view('pages.timeline');
    }
    public function invoice(Request $request)
    {
        return view('pages.invoice');
    }
    public function blankpage(Request $request)
    {
        return view('pages.blankpage');
    }
    public function adminpage(Request $request)
    {
        return view('pages.admin');
    }
    public function error(Request $request)
    {
        return view('pages.error');
    }
    public function error500(Request $request)
    {
        return view('pages.error500');
    }
    public function pricing(Request $request)
    {
        return view('pages.pricing');
    }
    public function pricingone(Request $request)
    {
        return view('pages.pricingone');
    }
    public function maintenance(Request $request)
    {
        return view('pages.maintenance');
    }
    public function comingsoon(Request $request)
    {
        return view('pages.comingsoon');
    }
    public function faq(Request $request)
    {
        return view('pages.faq');
    }

    public function eventdetail(Request $request)
    {
        return view('dashboards.eventdetail');
    }









    /*
     * UI Page Routes
     */

    public function uigrid()
    {
        return view('ui.uigrid');
    }

    public function uitabs()
    {
        return view('ui.uitabs');
    }

    public function uicard()
    {
        return view('ui.uicard');
    }

    public function uimodal()
    {
        return view('ui.uimodal');
    }

    public function uialert()
    {
        return view('ui.uialert');
    }

    public function uibadges()
    {
        return view('ui.uibadges');
    }



    public function uiimages()
    {
        return view('ui.uiimages');
    }



    public function uibutton()
    {
        return view('ui.uibutton');
    }

    public function uicarousel()
    {
        return view('ui.uicarousel');
    }

    public function uipopovers()
    {
        return view('ui.uipopovers');
    }

    public function uitooltips()
    {
        return view('ui.uitooltips');
    }
    public function uicolor()
    {
        return view('ui.uicolor');
    }
    public function uioffcanvas()
    {
        return view('ui.uioffcanvas');
    }




    public function uibreadcrumb()
    {
        return view('ui.uibreadcrumb');
    }

    public function uilistitems()
    {
        return view('ui.uilistitems');
    }

    public function uipagination()
    {
        return view('ui.uipagination');
    }

    public function uitypography()
    {
        return view('ui.uitypography');
    }

    public function uimedia()
    {
        return view('ui.uimedia');
    }

    public function uiprogressbars()
    {
        return view('ui.uiprogressbars');
    }


    public function uinotification()
    {
        return view('ui.uinotification');
    }

    public function uiemvideo()
    {
        return view('ui.uiemvideo');
    }

    /*CRUD*/
    public function userlist()
    {
        $users = User::all();
        return view('user.user_list', compact('users'));
    }

    public function create()
    {
        return view('user.add');
    }

    public function store(UserRequest $request)
    {
        dd('user');
        $request['password'] = bcrypt($request->password);

        $request['username'] = $request->username ?? stristr($request->email, "@", true) . rand(100, 1000);

        $user = User::create($request->all());


        //storeMediaFile($user,$request->profile_image, 'profile_image');

        // $user->assignRole('user');

        // Save user Profile data...
        $user->userProfile()->create($request->userProfile);

        return redirect()->route('users.index')->withSuccess(__('message.msg_added', ['name' => __('users.store')]));
    }

    public function show($id)
    {
        $data = User::with('userProfile')->findOrFail($id);

        $profileImage = getSingleMedia($data, 'profile_image');

        return view('users.profile', compact('data', 'profileImage'));
    }



    public function update(UserRequest $request, $id)
    {
        // dd($request->all());
        $user = User::with('userProfile')->findOrFail($id);
        dd($user);
        // $role = Role::find($request->user_role);
        // if(env('IS_DEMO')) {
        //     if($role->name === 'admin') {
        //         return redirect()->back()->with('errors', 'Permission denied.');
        //     }
        // }
        // $user->assignRole($role->name);

        $request['password'] = $request->password != '' ? bcrypt($request->password) : $user->password;

        // User user data...
        $user->fill($request->all())->update();

        // Save user image...
        if (isset($request->profile_image) && $request->profile_image != null) {
            $user->clearMediaCollection('profile_image');
            $user->addMediaFromRequest('profile_image')->toMediaCollection('profile_image');
        }

        // user profile data....
        $user->userProfile->fill($request->userProfile)->update();

        if (auth()->check()) {
            return redirect()->route('dashboards.index')->withSuccess(__('message.msg_updated', ['name' => __('message.user')]));
        }
        return redirect()->back()->withSuccess(__('message.msg_updated', ['name' => 'My Profile']));
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        // $status = 'errors';
        //$message= __('global-message.delete_form', ['form' => __('users.title')]);

        if ($user != '') {
            $user->delete();
            $status = 'success';
            //$message= __('global-message.delete_form', ['form' => __('users.title')]);
        }

        if (request()->ajax()) {
            return response()->json(['status' => true,  'datatable_reload' => 'dataTable_wrapper']);
        }

        return redirect()->back()->with($status);
    }

    /*footer pages */
    public function privacypolicy()
    {
        return view('footer.privacypolicy');
    }

    public function termsofservice()
    {
        return view('footer.termsofservice');
    }
}
