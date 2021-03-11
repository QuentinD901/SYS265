#secure-ssh.sh
#
#creates a new ssh user using the $1 paramter
sudo useradd -m -d /home/chungus -s /bin/bash chungus
sudo mkdir /home/chungus/.ssh
sudo cp SYS265-tech-journal/linux/public-keys/id_rsa.pub
sudo chmod 700 /home/chungus/.ssh
sudo chmod 600 /home/chungus/.ssh/authorized_keys
sudo chown -R chungus:chungus /home/chungus/.ssh
#adds a public key from the local repo or curled from the remote repo
#
#removes root's ssh ability
#sudo echo "PermitRootLogin no" >> /etc/ssh/sshd_config
# sudo ssytemctl restart sshd
