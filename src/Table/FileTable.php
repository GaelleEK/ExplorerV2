<?php
namespace App\Table;
use App\Model\File;



final class FileTable extends Table {

    protected $table = "files";
    protected $class = File::class;

    public function updateFile (File $file): void
    {
        $this->update([
            'name' => $file->getName(),
            'slug' => $file->getSlug(),
            'content' => $file->getContent(),
            'created_at' => $file->getCreatedAt()->format('Y-m-d H:i:s')
        ], $file->getID());

    }


    public function createFile (File $file): void
    {
        $id = $this->create([
            'name' => $file->getName(),
            'slug' => $file->getSlug(),
            'content' => $file->getContent(),
            'created_at' => $file->getCreatedAt()->format('Y-m-d H:i:s')
        ]);
        $file->setID($id);

    }





}