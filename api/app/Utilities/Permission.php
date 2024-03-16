<?php

namespace App\Utilities;

class Permission {

    //////////////////
    // Convert Data //
    //////////////////

    public function toArray() {
        return [
            "create" => $this->create(),
            "read" => $this->read(),
            "update" => $this->update(),
            "delete" => $this->delete()
        ];
    }

    public function toJSON() { return json_encode($this->toArray()); }
    public function toObject() { return (object) $this->toArray(); }

    //////////////
    // C.R.U.D. //
    //////////////

    private function crud(string $key, bool $set = null) {
        if ($set === null) { return $this->$key; }
        $this->$key = $set;
        return $this;
    }

    private bool $create = false;
    public function create(bool $set = null)  { return $this->crud('create', $set); }
    private bool $read = false;
    public function read(bool $set = null) { return $this->crud('read', $set); }
    private bool $update = false;
    public function update(bool $set = null) { return $this->crud('update', $set); }
    private bool $delete = false;
    public function delete(bool $set = null) { return $this->crud('delete', $set); }

}

