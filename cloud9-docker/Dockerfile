FROM kdelfour/cloud9-docker

# Enable collaboration (we add the --collab parameter to see the cursors of users that are editing the same file)
# We are not able to simply modify the target file via the sed command because a VOLUME is declared
# in a Dockerfile of the base image. More info about the issue: https://stackoverflow.com/a/40115267/4664724
COPY conf/cloud9.conf /etc/supervisor/conf.d/cloud9.conf
