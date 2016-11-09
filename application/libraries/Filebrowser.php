<?php
/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2016/11/09
 * Time: 8:40 AM
 */

/**
 * Class Filebrowser
 */
class Filebrowser
{
    protected $dir = 'files';

    public function __construct()
    {
    }

    public function get_files($dir)
    {
        $this->dir = $dir;
        // Run the recursive function
        $response = $this->scan_dir($this->dir);
        // This function scans the files folder recursively, and builds a large array

        return array(
            "name" => "files",
            "type" => "folder",
            "path" => $this->dir,
            "items" => $response
        );
    }

    private function scan_dir($dir)
    {

        $files = array();

        // Is there actually such a folder/file?
        if (file_exists($dir)) {

            foreach (scandir($dir) as $f) {

                if (!$f || $f[0] == '.') {
                    continue; // Ignore hidden files
                }

                if (is_dir($dir . '/' . $f)) {

                    // The path is a folder

                    $files[] = array(
                        "name" => $f,
                        "type" => "folder",
                        "path" => $dir . '/' . $f,
                        "items" => $this->scan_dir($dir . '/' . $f) // Recursively get the contents of the folder
                    );
                } else {

                    // It is a file

                    $files[] = array(
                        "name" => $f,
                        "type" => "file",
                        "path" => $dir . '/' . $f,
                        "size" => filesize($dir . '/' . $f) // Gets the size of this file
                    );
                }
            }

        }

        return $files;
    }
}