<?php

class Database
{
    function selectAll($table) {
        return fetchAllTask(connectDB($config));
    }

}