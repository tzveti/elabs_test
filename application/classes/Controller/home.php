<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Home extends Controller_Template 
{
    public $template = 'template';

    public function action_index()
    {
        if ($this->request->is_ajax()) 
        {
            $this->auto_render = FALSE;
            $this->is_ajax = TRUE;
            $this->request->headers['Content-Type'] = 'application/json';

            $users = ORM::factory('User')
                ->find_all();
            $json_data = array();
            
            foreach ($users as $user) 
            {
                foreach ($user->metas->find_all() as $meta)
                {
                    $id = $user->id;
                    $name = $user->firstname.' '.$user->surname;

                    if ($meta->key == 'avatar')
                    {
                        $avatar = $meta->value;
                    }
                    else if ($meta->key == 'tags') 
                    {
                        $tags = $meta->value;
                    }
                }
                array_push($json_data, 
                    ['id'=> $id, 'name' => $name, 
                    'avatar' => $avatar,  'tags' => $tags]);
            }
            //echo json_encode($json_data);

            $this->response->body(json_encode($json_data));
        }
        else
        {
            $users = ORM::factory('User')
                ->order_by('firstname', 'asc') # 'desc'
                ->find_all();
            
            $view = View::factory('table/user');
            $view->set('users', $users);
            
            $this->template->set('content', $view);
        }
    }
}