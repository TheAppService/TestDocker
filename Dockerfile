FROM registry.access.redhat.com/ubi8/ubi
USER 0
RUN yum -y install htop
