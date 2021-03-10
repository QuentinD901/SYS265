#secure-ssh.sh

#!/bin/bash

#creates a new ssh user using the $1 paramter
#adds a public key from the local repo or curled from the remote repo
sudo useradd -m -d /home/testuser -s /bin/bash testuser $1
sudo mkdir /home/testuser/.ssh
sudo cp ~/SYS265-tech-journal/linux/public-keys/id_rsa.pub /home/testuser/.ssh/authorized_keys
sudo chmod 700 /home/testuser/.ssh
sudo chmod 600 /home/testuser/.ssh/authorized_keys
sudo chown -R testuser:testuser /home/testuser/.ssh


#removes root's ssh ability
echo "PermitRootLogin no" >> /etc/ssh/sshd_config
sudo systemctl restart sshd

#echo "all of my code"


