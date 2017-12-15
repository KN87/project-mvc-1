<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */


//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }

    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {
        //$records = todos::findAll();
        session_start();

        $userID = $_SESSION['userID'];
        //print($userID);
        $records = todos::findTasksbyID($userID);
        //print_r($records);
        //To handle null records
        if ($records == False){

            $msg = "No TO-DO items available!";
            header("Location: index.php?page=errors&action=nullToDo&msg=$msg");

        }
        else {

        self::getTemplate('all_tasks', $records);

        }
    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here
    // To handle new task & update existing tasks
    public static function create()
    {
        session_start();
        $ownerId = $_SESSION["userID"];

        $task = new todo();
        if (isset($_REQUEST['id']))
            {
                $task->id = $_REQUEST['id'];
            }
        $task->owneremail = $_POST['owneremail'];
        $task->ownerid = $ownerId ;
        $task->createddate = $_POST['cdate'];
        $task->duedate = $_POST['duedate'];
        $task->message = $_POST['msg'];
        $task->isdone = $_POST['done'];
        //print_r($_POST);
        $task->save();
        header("Location: index.php?page=tasks&action=all");



    }

    //this is the function to view edit record form
    public static function edit()
    {
        //$record = todos::findOne($_REQUEST['id']);

        //self::getTemplate('edit_task', $record);


    }

    //this would be for the post for sending the task edit form
    public static function store()
    {


        $record = todos::findOne($_REQUEST['id']);
        $record->body = $_REQUEST['body'];
        $record->save();
        print_r($_POST);

    }

    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.

    public static function delete()
    {

       // $data = $_POST['select'];
        //if(!empty($data)){
         //   $record = todos::findAllTasksbyID($data);
          //  self::getTemplate('edit_task', $record);
          //   }

        session_start();
        $userID = $_SESSION['userID'];

        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        //print_r($_POST);

        //print($userID);
        // Added to see if user has any more tasks left. Else show the page for No to-do items.
        $records = todos::findTasksbyID($userID);
        if ($records == False){

            $msg = "No TO-DO items available!";
            header("Location: index.php?page=errors&action=nullToDo&msg=$msg");

        }
        else{
            header("Location: index.php?page=tasks&action=all");
        }


        //if(isset($_POST['delete'])){

            //if(!empty($_POST['select'])) {
                // Counting number of checked checkboxes.
                //$checked_count = count($_POST['select']);
                // echo "You have selected following ".$checked_count." option(s): <br/>";
                // Loop to store and display values of individual checked checkbox.
                //foreach($_POST['select'] as $selected) {
                //    echo "<p>".$selected ."</p>";
                //}


           // }
            //else{
            //    echo "<b>Please Select Atleast One Option.</b>";
            //}
        //}



    }

    public static function gettaskform()
    {
        //https://www.sitepoint.com/why-you-should-use-bcrypt-to-hash-stored-passwords/
        //USE THE ABOVE TO SEE HOW TO USE Bcrypt
        self::getTemplate('new_task');
    }

}