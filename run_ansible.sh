#!/bin/bash

if [ ! -f ansible/playbooks/setup.yml ]; then
  echo "Playbook not found!"
  exit 1
fi

if [ ! -d ansible/inventory ]; then
  echo "Inventory not found!"
  exit 1
fi

ansible-playbook -i ansible/inventory ansible/playbooks/setup.yml
