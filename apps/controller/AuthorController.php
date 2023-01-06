<?php
class AuthorController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model('author');
    }

    public function index()
    {
        // dd($allauthors);
        $allauthors = $this->author->showAll();

        $this->load->view('author.index', ['data' => $allauthors]);
        // $this->load->view('product.index', compact('allproducts'));
    }
    public function create()
    {
        $this->load->view('author.create');
    }
    public function store()
    {
        $data = [
            'username' => 'Vimal',
            'passowrd' => md5('vimalpanmasla'),
            'fullname' => 'Vimal kumar masala'
        ];
        $this->author->save($data);
    }

    public function edit($id)
    {
        echo "This is edit of ProductController $id";
    }

    public function update()
    {
        echo "This is update of ProductController ";
    }

    public function show()
    {
        echo "This is show of ProductController ";
    }
    public function destroy()
    {
        echo "This is destroy of ProductController ";
    }
}
