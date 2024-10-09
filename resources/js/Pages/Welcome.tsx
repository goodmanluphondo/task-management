import { Head, Link } from '@inertiajs/react';
import {Button} from "@/Components/ui/button";

export default function Welcome() {
    return (
        <>
            <Head title="Welcome" />
            <div className="min-h-screen bg-slate-50 flex flex-col items-center justify-center relative">
                <div className="">
                    <h1 className="text-2xl md:text-3xl lg:text-5xl font-bold">Welcome to the Task Management App</h1>
                    <div className="mt-8 flex items-center space-x-4 justify-center">
                        <Button variant="outline" asChild>
                            <Link href="/tasks">View Tasks</Link>
                        </Button>
                        <Button asChild>
                            <Link href="/tasks/create">Create New Task</Link>
                        </Button>
                    </div>
                </div>
            </div>
        </>
    );
}
