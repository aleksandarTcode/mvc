<?php
class TestController extends Controller
{
    public function index(): void
    {
        $this->viewbag["hello"] = "world";
        $this->viewbag["cars"] = Car::getAll();
        $this->showView("index");
    }
}
