<?php
namespace Lucid\Component\Factory;

interface FactoryInterface
{
    public function model(string $name, $id);
    public function controller(string $name);
    public function view(string $name, $parameters);
    public function ruleset(string $name);
    public function library(string $name);
    public function buildParameters($object, string $method, $parameters=[]);
}