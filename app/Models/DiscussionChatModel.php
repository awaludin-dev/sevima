<?php

namespace App\Models;

use CodeIgniter\Model;

class DiscussionChatModel extends Model
{
    protected $table = "discussion_chat";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['pengirim', 'isi', 'discussion_id', 'owner_id'];
}
