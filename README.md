# Group-3-Task-Dependency-Enhancement-Phase-3

Delete the README.md file when moving the other files in the proj folder. 
<br>
Everything should override the old files and the new files will just be added to the proj folder.

This requires a new table called "task_dependencies"

```sql
CREATE TABLE task_dependencies (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    task_id INT UNSIGNED NOT NULL,
    dependency_id INT UNSIGNED,
    FOREIGN KEY (task_id) REFERENCES task(taskid) ON DELETE CASCADE,
    FOREIGN KEY (dependency_id) REFERENCES task(taskid) ON DELETE SET NULL,
    PRIMARY KEY (id)
);
```

To add this new table, go to http://localhost/phpmyadmin/

Follow the images
<br>
<p><p>
<br>
Click cscdb
<br>
<p><p>
<br>
<img src="https://cdn.discordapp.com/attachments/1028895750819692616/1101260952642519110/image.png" alt="alt text" width="400" height="400">
<br>
<p><p>
<br>
Click SQL
<br>
<p><p>
<br>
<img src="https://cdn.discordapp.com/attachments/1028895750819692616/1101261089464922112/image.png" alt="alt text" width="1000" height="400">
<br>
<p><p>
<br>
Enter the sql code above
<br>
<p><p>
<br>
<img src="https://cdn.discordapp.com/attachments/1028895750819692616/1101261278049222706/image.png" alt="alt text" width="1000" height="500">    
<br>
<p><p>
<br>
On the same page, scroll down and click GO button
<br>
<p><p>
<br>
<img src="https://cdn.discordapp.com/attachments/1028895750819692616/1101261553950523523/image.png" alt="alt text" width="1000" height="250">    
    
    
    
   


