<?php
/**
 * Migration script to add reseller support
 * Adds created_by column to users table
 */

include 'config.php';

echo "Starting migration: Adding reseller support...\n";

// Check if column already exists
$check = $mysqli->query("SHOW COLUMNS FROM users LIKE 'created_by'");
if ($check && $check->num_rows > 0) {
    echo "Column 'created_by' already exists. Skipping...\n";
} else {
    // Add created_by column
    $sql = "ALTER TABLE users ADD COLUMN created_by INT NULL AFTER role";
    if ($mysqli->query($sql)) {
        echo "✓ Added 'created_by' column to users table\n";
    } else {
        echo "✗ Error adding column: " . $mysqli->error . "\n";
        exit(1);
    }
    
    // Add index for better performance
    $sql = "ALTER TABLE users ADD INDEX idx_created_by (created_by)";
    if ($mysqli->query($sql)) {
        echo "✓ Added index on 'created_by' column\n";
    } else {
        echo "⚠ Warning: Could not add index: " . $mysqli->error . "\n";
    }
    
    // Add foreign key constraint (optional, but good practice)
    // Note: This may fail if table uses MyISAM or if there are data type mismatches
    // It's not critical for functionality
    $sql = "ALTER TABLE users ADD CONSTRAINT fk_users_created_by 
            FOREIGN KEY (created_by) REFERENCES users(id) ON DELETE SET NULL";
    if ($mysqli->query($sql)) {
        echo "✓ Added foreign key constraint\n";
    } else {
        // Check if constraint already exists
        if (strpos($mysqli->error, 'Duplicate key name') !== false || 
            strpos($mysqli->error, 'already exists') !== false) {
            echo "⚠ Foreign key constraint already exists or cannot be created (non-critical)\n";
        } else {
            echo "⚠ Warning: Could not add foreign key (table may use MyISAM or other issue): " . $mysqli->error . "\n";
        }
    }
}

echo "\nMigration completed successfully!\n";
?>
