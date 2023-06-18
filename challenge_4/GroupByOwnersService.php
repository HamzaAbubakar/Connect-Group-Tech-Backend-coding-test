<?php

namespace App\Services;

class GroupByOwnersService
{
    public function sortDocs($docs_array)
    {
        $sorted_docs = [];
        
        foreach ($docs_array as $doc => $company) {
            if (!isset($sorted_docs[$company])) {
                $sorted_docs[$company] = [];
            }
            array_push($sorted_docs[$company],$doc);
        }
        
        return $sorted_docs;
    }
}
