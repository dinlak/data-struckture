<?php

class Queue {
    private $_queue = [];
    private $_size;

    public function __construct($size) {
        $this->_size = $size;
    }

    public function enqueue($item): bool {
        if (count($this->_queue) >= $this->_size) {
            return false; // Or throw new Exception("Queue overflow");
        }
        $this->_queue[] = $item;
        return true;
    }

    public function dequeue() {
        if (empty($this->_queue)) {
            return null; // Or throw new Exception("Queue underflow");
        }
        return array_shift($this->_queue);
    }

    public function front() {
        if (empty($this->_queue)) {
            return null;
        }
        return $this->_queue[0];
    }

    public function isEmpty(): bool {
        return empty($this->_queue);
    }

    public function size(): int {
        return count($this->_queue);
    }
}

/**
* Example usage
*/
$q = new Queue(5);

// Enqueue values
for ($i = 1; $i <= 5; ++$i) {
    if (!$q->enqueue($i)) {
        echo "Queue is full. Cannot enqueue $i\n";
    }
}

// Dequeue all values
while (!$q->isEmpty()) {
    echo $q->dequeue() . "\n";
}

// Check the front value
echo $q->front();
