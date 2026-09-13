<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Model: AuthModel
 * 
 * Automatically generated via CLI.
 */
class AuthModel extends Model {
    protected $table = 'users';
    protected $primary_key = 'id';
    protected $fillable = ['username', 'password'];
    protected $guarded = ['id'];

    public function __construct()
    {
        parent::__construct();
    }

    public function get_by_username($username)
    {
        return $this->db->table($this->table)
            ->where('username', $username)
            ->get();
    }
}